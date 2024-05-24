<x-guest-layout>
  @include('layouts.master')

  <section class="min-vh-100 mb-8 position-relative">
      <div class="page-header align-items-start min-vh-80 pt-5 pb-11 m-3 border-radius-lg"
           style="background-image: url('{{ asset('img/curved14.jpg') }}');    height: 400px;">
          <span class="mask bg-gradient-dark opacity-6"></span>
          <div class="container position-relative z-index-2">
              <div class="row justify-content-center">
                           <div class="col-lg-5 text-center mx-auto">
                            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                            <p class="text-lead text-white">Use these awesome forms to login or create a new account in your project for free.</p>
                        </div>
              </div>
            </div>
          </div>

      <div class="container">
          <div class="row mt-lg-n10 mt-md-n11 mt-n10">
              <div class="col-xl-4 col-lg-5 col-md-7 mx-auto" style="margin-top:-145px;">
                  <div class="card z-index-0">
                      <div class="card-header text-center pt-4">
                          <h5>Register with</h5>
                      </div>
                      <div class="row px-xl-5 px-sm-4 px-3">
                        <!-- Social media buttons -->
                        <div class="col-3 ms-auto px-1">
                            <a class="btn btn-outline-light w-100" href="javascript:;">
                                <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink32">
                                    <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="facebook-3" transform="translate(3.000000, 3.000000)" fill-rule="nonzero">
                                            <circle id="Oval" fill="#3C5A9A" cx="29.5091719" cy="29.4927506" r="29.4882047"></circle>
                                            <path d="M39.0974944,9.05587273 L32.5651312,9.05587273 C28.6886088,9.05587273 24.3768224,10.6862851 24.3768224,16.3054653 C24.395747,18.2634019 24.3768224,20.1385313 24.3768224,22.2488655 L19.8922122,22.2488655 L19.8922122,29.3852113 L24.5156022,29.3852113 L24.5156022,49.9295284 L33.0113092,49.9295284 L33.0113092,29.2496356 L38.6187742,29.2496356 L39.1261316,22.2288395 L32.8649196,22.2288395 C32.8649196,22.2288395 32.8789377,19.1056932 32.8649196,18.1987181 C32.8649196,15.9781412 35.1755132,16.1053059 35.3144932,16.1053059 C36.4140178,16.1053059 38.5518876,16.1085101 39.1006986,16.1053059 L39.1006986,9.05587273 L39.0974944,9.05587273 L39.0974944,9.05587273 Z" id="Path" fill="#FFFFFF"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            </div>
                        <div class="col-3 px-1">
                                   <a class="btn btn-outline-light w-100" href="javascript:;">
                                    <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <g id="apple-black" transform="translate(7.000000, 0.564551)" fill="#000000" fill-rule="nonzero">
                                                    <path d="M40.9233048,32.8428307 C41.0078713,42.0741676 48.9124247,45.146088 49,45.1851909 C48.9331634,45.4017274 47.7369821,49.5628653 44.835501,53.8610269 C42.3271952,57.5771105 39.7241148,61.2793611 35.6233362,61.356042 C31.5939073,61.431307 30.2982233,58.9340578 25.6914424,58.9340578 C21.0860585,58.9340578 19.6464932,61.27947 15.8321878,61.4314159 C11.8738936,61.5833617 8.85958554,57.4131833 6.33064852,53.7107148 C1.16284874,46.1373849 -2.78641926,32.3103122 2.51645059,22.9768066 C5.15080028,18.3417501 9.85858819,15.4066355 14.9684701,15.3313705 C18.8554146,15.2562145 22.5241194,17.9820905 24.9003639,17.9820905 C27.275104,17.9820905 31.733383,14.7039812 36.4203248,15.1854154 C38.3824403,15.2681959 43.8902255,15.9888223 47.4267616,21.2362369 C47.1417927,21.4153043 40.8549638,25.1251794 40.9233048,32.8428307 M33.3504628,10.1750144 C35.4519466,7.59650964 36.8663676,4.00699306 36.4804992,0.435448578 C33.4513624,0.558856931 29.7884601,2.48154382 27.6157341,5.05863265 C25.6685547,7.34076135 23.9632549,10.9934525 24.4233742,14.4943068 C27.7996959,14.7590956 31.2488715,12.7551531 33.3504628,10.1750144" id="Shape"></path>
                                           </g>
                                   </g>
                                </svg>
                                    </a>
                                </div>
                        <div class="col-3 me-auto px-1">
                            <a class="btn btn-outline-light w-100" href="javascript:;">
                                <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <g id="google-icon" transform="translate(3.000000, 2.000000)" fill-rule="nonzero">
                                       <path d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.3770442,51.2988437 L48.9118388,51.3551402 C54.3956229,46.362829 57.8123233,38.8888972 57.8123233,30.1515267" id="Path" fill="#4285F4"></path>
                                            <path d="M29.4960833,58.076842 C37.4650113,58.076842 44.0636792,55.4875582 48.9118388,51.3551402 L39.7213169,44.6372555 C37.4280179,46.1844042 34.3536677,47.098965 29.4960833,47.098965 C21.6834269,47.098965 15.0965062,42.0865037 12.8272542,35.0737213 L12.4732346,35.1045936 L3.30870671,41.6032861 L3.19353643,41.9274767 C8.02143075,51.1247747 18.0086429,58.076842 29.4960833,58.076842" id="Path" fill="#34A853"></path>
                                     <path d="M12.8272542,35.0737213 C12.1702537,33.2384345 11.7599142,31.220199 11.7599142,29.038421 C11.7599142,26.856643 12.1702537,24.8384074 12.7994054,23.0031206 L12.782745,22.6095882 L3.50035188,15.9650546 L3.19353643,16.1493654 C1.16069262,19.9131215 0,24.321297 0,29.038421 C0,33.755545 1.16069262,38.1637205 3.19353643,41.9274767 L12.8272542,35.0737213" id="Path" fill="#FBBC05"></path>
                                      <path d="M29.4960833,10.977876 C34.1306862,10.977876 37.2210458,12.8477066 39.0713483,14.5528817 L48.0692592,5.86329079 C44.0552471,2.18226811 37.4650113,0 29.4960833,0 C18.0086429,0 8.02143075,6.95206734 3.19353643,16.1493654 L12.7994054,23.0031206 C15.0965062,15.9899722 21.6834269,10.977876 29.4960833,10.977876" id="Path" fill="#EB4335"></path>
                                        </g>
                            </g>
                                </svg>
                            </a>
                        </div>
                        <div class="mt-2 position-relative text-center">
                            <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                                or
                            </p>
                        </div>
                    </div>
                      <div class="card-body">
                          <form role="form" action="{{ route('register') }}" method="POST">
                              @csrf
                              <div class="mb-3">
                                  <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name" value="{{ old('name') }}">
                                  @error('name')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                  <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" value="{{ old('email') }}">
                                  @error('email')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                  <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password">
                                  @error('password')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                  <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password">
                                  @error('password_confirmation')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                              <div class="form-check form-check-info text-left">
                                  <input class="form-check-input" type="checkbox" id="flexCheckDefault" onchange="toggleSubmitButton()">
                                  <label class="form-check-label" for="flexCheckDefault">
                                      I agree to the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                                  </label>
                              </div>
                              <div class="text-center">
                                  <button type="submit" id="submitBtn" class="btn btn-primary w-100 my-4 mb-2" disabled>Sign up</button>
                              </div>
                              <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('login') }}" class="text-dark font-weight-bolder">Sign in</a></p>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Company
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            About Us
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Team
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Products
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Blog
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Pricing
          </a>
        </div>
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble" aria-hidden="true"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-github" aria-hidden="true"></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> 
            Soft by Creative Tim.
          </p>
        </div>
      </div>
    </div>
  </footer>
</x-guest-layout>


<style>
    
  .custom-form-container {
      bottom: -25%; 
      top: 16%;
      left: 50%;
      transform: translateX(-50%);
      width: 100%; 
  }
  </style>


<script>
function toggleSubmitButton() {
    var checkBox = document.getElementById('flexCheckDefault');
    var submitButton = document.getElementById('submitBtn');
    submitButton.disabled = !checkBox.checked;
}
</script>


{{-- <script>
  const checkbox = document.querySelector('#myCheckbox');
  const label = document.querySelector('label[for="myCheckbox"]');

  label.addEventListener('click', () => {
    checkbox.checked = !checkbox.checked;
  });
</script> --}}