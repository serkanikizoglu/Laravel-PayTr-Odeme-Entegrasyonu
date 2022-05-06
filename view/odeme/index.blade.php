
            <form action="{{route("odeme.sonuc")}}" method="POST"  class="login100-form validate-form">
                {{csrf_field()}}
                <div class="wrap-input100 validate-input m-b-26" data-validate="Ad Soyad Alanı Zorunludur !">
                    <span class="label-input100">Ad Soyad</span>
                    <input class="input100" type="text" name="adsoyad">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-26" data-validate="Telefon Alanı Zorunludur !">
                    <span class="label-input100">Telefon</span>
                    <input class="input100" type="text" name="telefon">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-26" data-validate="Miktar Alanı Zorunludur !">
                    <span class="label-input100">Miktar</span>
                    <input class="input100" type="number" name="miktar">
                    <span class="focus-input100"></span>
                </div>

                <select class="form-control " name="urun" required="" style="    margin-bottom: 21px;
    height: 47px;">
                    <option value="">Hizmet Seçiniz.</option>
                    <option value="Grafik-tasarim">Grafik Tasarım</option>
                    <option value="web-tasarim">Web Tasarım</option>
                    <option value="teknik-destek">Teknik Destek</option>
                    <option value="Domain-Hosting">Domain + Hosting</option>
                </select>


                <div class="container-login100-form-btn">
                    <button  type="submit" class="login100-form-btn">
                        Ödeme Yap
                    </button>
                </div>
            </form>