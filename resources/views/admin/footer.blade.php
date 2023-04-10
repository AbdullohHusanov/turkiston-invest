

@env('local')
    <div class="text-center">© 2022 - {{ now()->year }} <br> TURKISTON INVEST JOIN STOCK COMPANY <br>
        <a style="color: #0EA5E9" href="mailto:main-proxy@aslim.uz">admin@turkistoninvest.uz</a>
    </div>
@endenv

@env('production')
    <div class="text-center">© 2022 - {{ now()->year }} <br> TURKISTON INVEST JOIN STOCK COMPANY <br>
        <a style="color: #0EA5E9" href="mailto:admin@turkistoninvest.uz">admin@turkistoninvest.uz</a>
    </div>
@endenv
