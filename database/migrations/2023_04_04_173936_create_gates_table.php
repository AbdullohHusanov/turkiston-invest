<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateGatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('nova-permissions.table_names');

        Schema::create($tableNames['roles'], function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('name')->nullable();
            $table->timestamps();
        });

        Schema::create($tableNames['role_permission'], function (Blueprint $table) use ($tableNames) {
            $table->unsignedBigInteger('role_id');
            $table->string('permission_slug');
            $table->timestamps();
            $table->foreign('role_id')
                  ->references('id')
                  ->on($tableNames['roles'])
                  ->onDelete('cascade');
            $table->primary(['role_id', 'permission_slug']);
        });

        Schema::create($tableNames['role_user'], function (Blueprint $table) use ($tableNames) {
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('role_id')
                  ->references('id')
                  ->on($tableNames['roles'])
                  ->onDelete('cascade');

            $table->foreign('user_id')
                  ->references('id')
                  ->on($tableNames['users'])
                  ->onDelete('cascade');
            $table->primary(['role_id', 'user_id']);
        });

        $role_admin = new \App\Models\Role();
        $role_admin->name = 'admin';
        $role_admin->slug = 'admin';
        $role_admin->save();

        $permissions = config('nova-permissions.permissions');

        foreach ($permissions as $key => $permission){
            $per[] = [
                'role_id' => $role_admin->id,
                'permission_slug' => $key,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        \Pktharindu\NovaPermissions\Permission::insert($per);


        $user = \App\Models\User::all()->find(1);
        $user->assignRole('admin');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = config('nova-permissions.table_names');

        Schema::dropIfExists($tableNames['role_permission']);
        Schema::dropIfExists($tableNames['role_user']);
        Schema::dropIfExists($tableNames['roles']);
    }
}
