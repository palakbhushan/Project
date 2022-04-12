@extends('index')

@section('content')

      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding rmar" style="background-image:url(../images/main-bg.jpg); background-repeat:no-repeat; background-size:cover;">
 
      <section class="inner_page_head rmar" >
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3 style="color:rgb(39, 64, 63) !important;">𝐂𝐨𝐧𝐭𝐚𝐜𝐭 𝐮𝐬</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form action="index.html">
                        <fieldset>
                           <input type="text" placeholder="Enter your full name" name="name" required />
                           <input type="email" placeholder="Enter your email address" name="email" required />
                           <input type="text" placeholder="Enter subject" name="subject" required />
                           <textarea placeholder="Enter your message" required></textarea>
                           <input type="submit" value="Submit" />
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection