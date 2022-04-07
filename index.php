<!DOCTYPE html>
<html>
<head>
	<title>Cutting Edge Institute </title>
  <link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="css/typography.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" type="image/png" href="images/cutting.jpg">
  <meta  name="viewport" content="width=device-width,initial-scale=1.0"> 
</head>
<body class="noselect" onload="display0(), AutoChangeBg()" onscroll="naved()">
  <div class="mobile-nav-modal" id="nav-modal"></div>
  <div class="mobile-nav bg-white hidden-ls">
    <div class="xs-6"><div class="img-container-circle-1 xs-down-5 xs-off-1"><img src="images/cutting.jpg"></div></div>
    <div class="xs-6 right"><a href="javascript:void(0)" class="btn-sm color-code-1 px20" id="bars"><i class="fas fa-bars" id="icon"></i></a></div>
  </div>
  <div class="mobile-nav-open hidden-ls" id="full-nav">
    <div class="container xs-down-10">
      <div class="centered xs-12 xs-down-10"><div class="img-container-circle"><img src="images/cutting.jpg"></div></div>
      <div class="xs-12 centered"><span class="white px20">Cutting Edge Institute</span></div>
      <div class="mother xs-down-10">
        <a href="index.php"><i class="fas fa-home"></i> Home</a>
        <a href="index.php#services"><i class="fas fa-bicycle"></i> Services</a>
        <a href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
        <a href="blog.php"><i class="fas fa-blog"></i> Blog</a>
      </div>
    </div>
  </div>
  <!-- Hire us container -->
  <div class="modal-faded fade-in hidden-xs" id="contact_modal" hidden="">
    <div class="container right absolute down-5"><span class="color-code-1 px13 btn-sm-curved bg-faded" onclick="closeModal('contact_modal')"><i class="fas fa-times"></i></span></div>
    <div class="col-8 off-2 down-1 bg-color-code-4 bottom-50">
      <div class="centered down-2"><span class="white px30 Quest">Get in touch</span></div>
      <div class="centered Quest"><span class="px13 white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  </span></div>
      <div class="col-10 off-1 down-5">
        <div class="col-5">
          <div class="">
            <div><span class="white Quest">How would you like to contact us ?</span></div>
            <div class="mother down-15"><a href="javascript:void(0)" onclick="openContact('c1', 'c2', 'c3')" class="white px13 Quest btn-sm-contact border-color-code-1"><i class="fas fa-envelope color-code-1"></i>   send us a mail</a></div>
            <div class="mother down-5"><a href="javascript:void(0)" onclick="openContact('c2', 'c1', 'c3')" class="white px13 Quest btn-sm-contact border-color-code-1"><i class="fas fa-phone color-code-1"></i>   place a call</a></div>
            <div class="mother down-5"><a href="javascript:void(0)" onclick="openContact('c3','c1','c2')" class="white px13 Quest btn-sm-contact border-color-code-1"><i class="fab fa-whatsapp color-code-1"></i> start a whatssap chat</a></div>
            <div class=" mother down-30">
              <a href="" class="color-code-1 "><i class="fab fa-facebook"></i></a>
              <a href="" class="color-code-1 off-1"><i class="fab fa-instagram"></i></a>
              <a href="" class="color-code-1 off-1"><i class="fab fa-twitter"></i></a>
              <a href="" class="color-code-1 off-1"><i class="fas fa-map-marker-alt"></i></a>
            </div>
          </div>
        </div>
        <div class="col-7 fade-in" id="c1">
          <div class="container bg-white">
            <div class="col-10 off-1">
              <div class="down-5 mother"><span class="Quest bold color-code-1"><i class="fas fa-envelope color-code-1"></i> Send a mail</span></div>
              <form method="POST" action="helper.php">
                <input type="text" name="status" value="New" hidden="">
                <div class="mother down-5">
                  <label><span class="px13 Quest">Your Name</span></label>
                  <div class="email-input-container">
                    <div class="col-1 centered"><span class="faded px13"><i class="fas fa-user"></i></span></div>
                    <div class="col-8"><input type="text" required="" name="name" placeholder="your name here"></div>
                  </div>
                </div>
                <div class="mother down-3">
                  <label><span class="px13 Quest">Your Mail</span></label>
                  <div class="email-input-container">
                    <div class="col-1 centered"><span class="faded px13"><i class="fas fa-envelope"></i></span></div>
                    <div class="col-8"><input type="email" name="email" required="" placeholder="your e-mail address"></div>
                  </div>
                </div>
                <div class="mother down-3">
                  <label><span class="px13 Quest">Phone Number</span></label>
                  <div class="email-input-container">
                    <div class="col-1 centered"><span class="faded px13"><i class="fas fa-phone"></i></span></div>
                    <div class="col-8"><input type="Tel" name="phone" required="" placeholder="phone number"></div>
                  </div>
                </div>
                <div class="mother down-2">
                  <label><span class="px13 Quest">Message</span></label>
                  <div class="mother bg-faded">
                    <textarea placeholder="Message here" name="message" required=""></textarea>
                  </div>
                </div>
                <div class="mother down-5 bottom-10 right"><button type="submit" name="send_mail" value="" class="bg-color-code-1"> <i class="fas fa-paper-plane"></i> Send mail</button></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-7 down-2 fade-in" hidden="" id="c2">
          <div class="container bg-white">
            <div class="col-10 off-1 bottom-50">
              <div class="down-5 mother centered"><span class="Quest bold color-code-1"><i class="fas fa-phone color-code-1"></i> Place a call</span></div>
              <div class="mother centered">
                <div class="down-5 mother">
                  <span class=" init-bg"><i class="fas fa-phone"></i></span>
                  <div class="mother down-4"><span class="px13 faded Quest">+234 813 336 5207</span></div>
                </div>
                <div class="mother down-10 centered"><a href="tel:08133365207" class="btn-1 white bg-color-code-1 px13 Quest"> Place a call Now</a></div>
              </div>
          </div>
        </div>
      </div>
        <div class="col-7 down-2 fade-in" hidden="" id="c3">
          <div class="container bg-white">
            <div class="col-10 off-1 bottom-50">
              <div class="down-5 mother centered"><span class="Quest bold color-code-1"><i class="fas fa-comments color-code-1"></i> Chat us on whatssap</span></div>
              <div class="mother centered">
                <div class="down-5 mother">
                  <span class=" init-bg"><i class="fab fa-whatsapp"></i></span>
                  <div class="mother down-4"><span class="px13 faded Quest">+234 813 336 5207 </span></div>
                </div>
                <div class="mother down-10 centered"><a href="https://wa.me/<08133365207>" class="btn-1 white bg-color-code-1 px13 Quest"> Start a conversation</a></div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Queries -->
  <div class="modal-faded fade-in hidden-xs" id="contact_modal-1" hidden="">
    <div class="container right absolute down-5"><span class="color-code-1 px13 btn-sm-curved bg-faded" onclick="closeModal('contact_modal-1')"><i class="fas fa-times"></i></span></div>
    <div class="col-8 off-2 down-1 bg-color-code-4 bottom-50">
      <div class="centered down-2"><span class="white px30 Quest">Report An Issue</span></div>
      <div class="centered Quest"><span class="px13 white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </span></div>
      <div class="col-10 off-1 down-5">
        <div class="col-5">
          <div class="">
            <div><span class="white Quest">How would you like to contact us ?</span></div>
            <div class="mother down-15"><a href="javascript:void(0)" onclick="openContact('q1', 'q2', 'q3')" class="white px13 Quest btn-sm-contact border-color-code-1"><i class="fas fa-envelope color-code-1"></i>   send us a mail</a></div>
            <div class="mother down-5"><a href="javascript:void(0)" onclick="openContact('q2', 'q1', 'q3')" class="white px13 Quest btn-sm-contact border-color-code-1"><i class="fas fa-phone color-code-1"></i>   place a call</a></div>
            <div class="mother down-5"><a href="javascript:void(0)" onclick="openContact('q3','q1','q2')" class="white px13 Quest btn-sm-contact border-color-code-1"><i class="fab fa-whatsapp color-code-1"></i> start a whatssap chat</a></div>
            <div class=" mother down-30">
              <a href="" class="color-code-1 "><i class="fab fa-facebook"></i></a>
              <a href="" class="color-code-1 off-1"><i class="fab fa-instagram"></i></a>
              <a href="" class="color-code-1 off-1"><i class="fab fa-twitter"></i></a>
              <a href="" class="color-code-1 off-1"><i class="fas fa-map-marker-alt"></i></a>
            </div>
          </div>
        </div>
        <div class="col-7 fade-in" id="q1">
          <div class="container bg-white">
            <div class="col-10 off-1">
              <div class="down-5 mother"><span class="Quest bold color-code-1"><i class="fas fa-envelope color-code-1"></i> Report An Issue</span></div>
              <form method="POST" action="helper.php">
                <input type="text" name="status" value="New" hidden="">
                <div class="mother down-5">
                  <label><span class="px13 Quest">Your Name</span></label>
                  <div class="email-input-container">
                    <div class="col-1 centered"><span class="faded px13"><i class="fas fa-user"></i></span></div>
                    <div class="col-8"><input type="text" required="" name="name" placeholder="your name here"></div>
                  </div>
                </div>
                <div class="mother down-3">
                  <label><span class="px13 Quest">Your Mail</span></label>
                  <div class="email-input-container">
                    <div class="col-1 centered"><span class="faded px13"><i class="fas fa-envelope"></i></span></div>
                    <div class="col-8"><input type="email" name="email" required="" placeholder="your e-mail address"></div>
                  </div>
                </div>
                <div class="mother down-3">
                  <label><span class="px13 Quest">Phone Number</span></label>
                  <div class="email-input-container">
                    <div class="col-1 centered"><span class="faded px13"><i class="fas fa-phone"></i></span></div>
                    <div class="col-8"><input type="Tel" name="phone" required="" placeholder="phone number"></div>
                  </div>
                </div>
                <div class="mother down-2">
                  <label><span class="px13 Quest">Query</span></label>
                  <div class="mother bg-faded">
                    <textarea placeholder="Message here" name="query" required=""></textarea>
                  </div>
                </div>
                <div class="mother down-5 bottom-10 right"><button type="submit" name="send_query" value="" class="bg-color-code-1"> <i class="fas fa-paper-plane"></i> Send Query</button></div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
  <div class="bg-landing" hidden="">
    <div class="dark-scarf">
      <nav class="hidden-xs slide-in mother" id="nav">
          <div class="col-10 off-1">
            <span class="cu-logo px13"></span>
            <a href="index.php" class="active_page white">Home</a>
            <a href="index.php#about-us">About</a>
            <a href="index.php#services">Services</a>
            <a href="javascript:void(0)" onclick="openModal('contact_modal')">Contact</a>
            <div class="nav-cluster">
              <a >Others <i class="fas fa-caret-down"></i></a>
              <div class="nav-cluster-elements height-on-u ">
                <a href="javascript:void(0)" onclick="openModal('contact_modal-1')">Queries</a>
                <a href="">Teachers Report (for teachers only)</a>
              </div>
            </div>
            <a href="blog.php" class="cu-focus">Blog</a>
          </div>
        </nav>
      <div class="col-10 off-1">
        <div class="col-10 down-10">
           <div class="slide-in mother">
            <span class="white px60 xs-px80 xs-black deltaR">Cutting Edge <span class="color-code-1">Institute</span></span>
           <div class=""><span class="white arait">...naturing your child for the future</span></div>
          </div>
           <div class="slide-in mother">
             <div class="down-4 mother"><span class="faded px13 xs-black">Our Institute will provide your child with a one-on-one learning approach, the needed advantage to edge his/her peers allowing your ward to reach the height of his/her potentials. With our tutelage, guidance and professionalism, your child’s education will improve well with time. We will ensure that he/she is learning successfully and making reasonable progress, given his/her age, learning style, class, aptitude and personality need the best suit. <span class=" bold">We offer HOME SERVICE at an affordable price.</span></span></div> 
             <div class="mother slide-in">
               <a href="javascript:void(0)" onclick="openModal('contact_modal')" class="call-to-action px13 hidden-xs down-5 white dark-scarf border-color-code-1"><i class="fas fa-envelope"></i> Hire Us</a>               
             </div> 
           </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-landing" hidden="">
    <div class="dark-scarf">
     <nav class="hidden-xs slide-in mother" id="nav">
         <div class="col-10 off-1">
           <span class="cu-logo px13"></span>
           <a href="index.php" class="active_page white">Home</a>
           <a href="index.php#about-us">About</a>
           <a href="index.php#services">Services</a>
           <a href="javascript:void(0)" onclick="openModal('contact_modal')">Contact</a>
           <div class="nav-cluster">
             <a >Others <i class="fas fa-caret-down"></i></a>
             <div class="nav-cluster-elements height-on-u ">
               <a href="javascript:void(0)" onclick="openModal('contact_modal-1')">Queries</a>
               <a href="">Teachers Report (for teachers only)</a>
             </div>
           </div>
           <a href="blog.php" class="cu-focus">Blog</a>
         </div>
       </nav>
      <div class="col-10 off-1">
        <div class="col-10 down-10">
           <div class="slide-in mother">
            <span class="white px60 xs-px80 xs-black deltaR">Why <span class="color-code-1">Us ?</span></span>
           <div class=""><span class="white arait">...We don't just teach, we bring out the best in your child</span></div>
          </div>
           <div class="slide-in mother">
             <div class="down-4 mother"><span class="faded px13 xs-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span></div> 
             <div class="mother slide-in">
               <a href="javascript:void(0)" onclick="openModal('contact_modal')" class="call-to-action px13 hidden-xs down-5 white dark-scarf border-color-code-1"><i class="fas fa-envelope"></i> Learn more</a>              
             </div> 
           </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-landing" hidden="">
    <div class="dark-scarf">
     <nav class="hidden-xs slide-in mother" id="nav">
         <div class="col-10 off-1">
           <span class="cu-logo px13"></span>
           <a href="index.php" class="active_page white">Home</a>
           <a href="index.php#about-us">About</a>
           <a href="index.php#services">Services</a>
           <a href="javascript:void(0)" onclick="openModal('contact_modal')">Contact</a>
           <div class="nav-cluster">
             <a >Others <i class="fas fa-caret-down"></i></a>
             <div class="nav-cluster-elements height-on-u ">
               <a href="javascript:void(0)" onclick="openModal('contact_modal-1')">Queries</a>
               <a href="">Teachers Report (for teachers only)</a>
             </div>
           </div>
           <a href="blog.php" class="cu-focus">Blog</a>
         </div>
       </nav>
      <div class="col-10 off-1">
        <div class="col-10 down-10">
           <div class="slide-in mother">
            <span class="white px60 xs-px80 xs-black deltaR">Accademic <span class="color-code-1">Challenges ?</span></span>
           <div class=""><span class="white arait">Hey there!...We've got you covered</span></div>
          </div>
           <div class="slide-in mother">
             <div class="down-4 mother"><span class="faded px13 xs-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span></div> 
             <div class="mother slide-in">
               <a href="javascript:void(0)" onclick="openModal('contact_modal')" class="call-to-action px13 hidden-xs down-5 white dark-scarf border-color-code-1"><i class="fas fa-envelope"></i> Learn more</a>              
             </div> 
           </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hidden-ls mother">
    <div class="img-container xs-down-20"><img src="images/cu0.jpg"></div>
    <div class="bg-overlay"></div>  
  </div>
  </div>
  <div class="mother hidden-ls bottom-50">
    <div class="xs-container xs-top-3 bg-white">
      <div class="container xs-down-10">
        <div><span class="xs-px40 color-code-1">Why Us ?</span></div>
        <div class="color-code-1 xs-12 xs-down-5">
          Dear parent/Guardian,
               <p><i class="fas fa-caret-right"></i>  Do you think your child, at any educational level, needs extra attention or a little more
                push to excel in his/her studies?</p>
                <p><i class="fas fa-caret-right"></i> Does your kid have challenges understanding ANY SUBJECT in school?</p>
                <p><i class="fas fa-caret-right"></i>  Have you sought qualified tutors to help fill this gap and it yet eludes you?</p>
               <p><i class="fas fa-caret-right"></i>  Do you need a competent, God fearing and experienced PRIVATE/HOME tutor to help
                your child attain a plausible and CUTTING-EDGE academic excellence?</p>
                <div class="xs-12"><p class="bold"> We urge you to search no further...</p></div>
         </span>
       </div>
        <div class="xs-12"><span class="color-code-1"><span class="bold">CUTTING EDGE INSTITUTE</span>  will provide your child with a one-on-one learning approach, the needed advantage to edge his/her peers allowing your kid to reach the height of his/her potentials. With our tutelage, guidance and professionalism, your child’s education will improve well with time. We will ensure that he/she is learning successfully and making reasonable progress, given his/her age, learning style, class, aptitude and personality need the best suit. We offer <span class="bold color-code-1">HOME SERVICE</span> at an affordable price.</span></div>
        <div class="mother xs-down-10"><a href="contact.php" class="btn-sm bg-color-code-1 white px13"><i class="fas fa-envelope"></i> Hire Us Now</a></div>
      </div>
    </div>
  </div>
  <div class="mother bg-white xs-bg-faded centere bottom-50" id="about-us">
    <div class="col-10 off-1 xs-10 xs-off-1 xs-bg-faded bg-white bottom-50">
      <div class="container down-5 xs-down-10">
        <div class="col-12">
          <span class="color-code-1 px45 xs-px40">Here's What We Do</span>
          <div><span class="px13">we have educators that are capable to help your child’s</span></div>
      </div>
      </div>
      <div class="mother down-1 xs-down-10">
        <div class="col-4 xs-12">
          <div class="special-card">
            <div class="container">
              <div class="top-5 col-12 xs-5"><span class="init-bg down-20"><i class="fas fa-pen"></i></span></div>
              <div class="col-12 xs-7 down-6">
                <span class="black px13 bold xs-px15">Reading/writting ability (Phonics/Montessori)</span>
                <div class="containe down-1 xs-down-3"><span class="faded px13 ">Reading and writting ability is an integral aspect of education that your child can't afford not to have...</span></div>
                 <div class="mother down-5 xs-down-5"><a href="what_we_do.php" class="btn-sm bg-color-code-1 white px13">Read more <i class="fas fa-angle-right"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 xs-down-15 xs-12">
          <div class="special-card">
            <div class="container">
              <div class="top-5 mother xs-5"><span class="init-bg down-20"><i class="fas fa-question"></i></span></div>
              <div class="col-12 xs-7 down-6">
                <span class="black px13 bold xs-px15">Challenges in any subject</span>
                <div class="containe down-1 xs-down-3"><span class="faded px13 ">A student's challenges with any subject can sometimes be due to the mode of delievery of the...</span></div>
                 <div class="mother down-5 xs-down-5"><a href="what_we_do.php" class="btn-sm bg-color-code-1 white px13">Read more <i class="fas fa-angle-right"></i></a></div>
              </div>
            </div>
          </div>
        </div>
       <div class="col-4 xs-down-15 xs-12">
          <div class="special-card">
            <div class="container">
              <div class="top-5 mother xs-5"><span class="init-bg down-20"><i class="fas fa-graduation-cap"></i></span></div>
              <div class="col-12 xs-7 down-6">
                <span class="black px13 bold xs-px15">Success in all kinds of exams</span>
                <div class="containe down-1 xs-down-3"><span class="px13 faded ">The sucess of our students in their various examination is our uttermost priority...</span></div>
                 <div class="mother down-5 xs-down-5"><a href="what_we_do.php" class="btn-sm bg-color-code-1 white px13 ">Read more <i class="fas fa-angle-right"></i></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mother bg-faded bottom-50 xs-bg-white" id="services">
    <div class="col-10 off-1 down-5 xs-10 xs-off-1 xs-down-15">
      <div class="col-5">
       <div class="card"><div class="img-container"><img src="images/im99.jpg"></div></div>
      </div>
      <div class="col-5 off-2">
        <div class="container xs-down-10">
          <div><span class="xs-px40 px45 color-code-1">Our Educators are..</span></div>
          <div class="mother down-3 xs-down-10">
            <span class="color-code-1 px13"><i class="fas fa-check"></i> <span class="left10">Skilful and trained</span></span>
            <div class="down-1 xs-down-3 xs-12"><span class="color-code-1 px13"><i class="fas fa-check"></i> <span class="left10">Competent, Qualified and Experienced</span></span></div>
            <div class="down-1 xs-down-3 xs-12"><span class="color-code-1 px13"><i class="fas fa-check"></i> <span class="left10">Vast in teaching curriculum</span></span></div>
            <div class="down-1 xs-down-3 xs-12"><span class="color-code-1 px13"><i class="fas fa-check"></i> <span class="left10">Courteous and well-behaved</span></span></div>
            <div class="down-1 xs-down-3 xs-12"><span class="color-code-1 px13"><i class="fas fa-check"></i> <span class="left10">Godly and professional</span></span></div>
          </div>
        </div>
      </div>
    </div>
 </div>
 <div class="mother bottom-50 xs-bg-faded">
  <div class="col-10 off-1 down-5 xs-10 xs-off-1 xs-down-10"><span class="px45 color-code-1">Our Services..</span></div>
   <div class="col-10 off-1 down-5 xs-10 xs-off-1 xs-down-5">
     <div class="col-6 xs-12 bg-white xs-down-10 bottom-50">
       <div class="container xs-down-5">
         <div class="col-2"><div class="img-container-circle-1"><img src="images/cutting.jpg"></div></div>
         <div class="col-9 xs-12">
           <div class="container">
            <span class="color-code-1 bold">PRIVATE COACHING</span>
            <div class="xs-12 xs-down-3"><span class="px13 faded">We have experienced educators that will deal with Challenges students at any level (Nursery, Primary, secondary or higher institution ) may have with any subject, topic or courses at affordable price. 
            </span></div>
          </div>
         </div>
       </div>
     </div>
     <div class="col-6 xs-12 bg-white xs-down-10 bottom-50">
       <div class="container xs-down-5">
         <div class="col-2"><div class="img-container-circle-1"><img src="images/cutting.jpg"></div></div>
         <div class="col-9 xs-12">
           <div class="container">
            <span class="color-code-1 bold">COMMON ENTRANCE EXAMINATION</span>
            <div class="xs-12 xs-down-3"><span class="px13 faded">Your kids performance in any entrance examination is largely dependent on how prepared he/she is. Here, at cutting edge institute, <span class=" bold">we have professional educators that will prepare you kid for the fortcoming entrance examinition</span>. 
            </span></div>
          </div>
         </div>
       </div>
     </div>
     <div class="mother down-3">
       <div class="col-6 xs-12 bg-white xs-down-10 bottom-50">
         <div class="container xs-down-5">
           <div class="col-2"><div class="img-container-circle-1"><img src="images/cutting.jpg"></div></div>
           <div class="col-9 xs-12">
             <div class="container">
              <span class="color-code-1 bold">WASSCE, GCE, NECO, JSSCE etc TUTORIAL</span>
              <div class="xs-12 xs-down-3"><span class="px13 faded">Give your child the best ONE-ON-ONE WAEC lessions with cutting edge institute. You don't have to spend money on special centeres. Hire us, we will help your child clear all papers on ONE SITTING.  
              </span></div>
            </div>
           </div>
         </div>
       </div>
       <div class="col-6 xs-12 bg-white xs-down-10 bottom-50">
         <div class="container xs-down-5">
           <div class="col-2"><div class="img-container-circle-1"><img src="images/cutting.jpg"></div></div>
           <div class="col-9 xs-12">
             <div class="container">
              <span class="color-code-1 bold">UTME (JAMB) TUTORIALS</span>
              <div class="xs-12 xs-down-3"><span class="px13 faded">Here we come again...If you're looking for the best one-on-one jamb tutorial classes for your kid, you are in the right place. We have in the past handled novice in various departments (science, arts and commercial) for utme examinations who made euge success (280+ scores) on just one sitting. <span class=" bold">Hire us, let's make your kids examanimation count</span>. 
              </span></div>
            </div>
           </div>
         </div>
       </div>
       <div class="col-10 off-1 top-7 xs-10 xs-down-10 hidden-xs" ><a onclick="openModal('contact_modal')" class="btn-sm bg-color-code-1 white px13"><i class="fas fa-envelope"></i> Hire Us Now</a></div>
       <div class="col-10 off-1 top-7 xs-10 xs-down-10 hidden-ls" ><a href="contact.php" class="btn-sm bg-color-code-1 white px13"><i class="fas fa-envelope"></i> Hire Us Now</a></div>
     </div>
   </div>
 </div>
  <div class="mother bottom-50 bg-faded xs-bg-white">
    <div class="xs-10 xs-off-1 xs-down-10 col-10 off-1 down-5">
      <div class="col-12 bg-colo-code-1 bottom-50">
        <div class="col-5">
          <div class="card">
            <div class="img-container"><img src="images/im1.jpg"></div>
          </div>
        </div>
      <div class="col-5 off-2 xs-12 xs-down-7">
        <span class="color-code-1 px45">Our Records..</span>
        <div class="mother down-1 xs-down-5"><span class="px13 faded">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>
      </div>
      </div>
    </div>
  </div>
   <div class="mother bottom-50 xs-bg-faded">
    <div class="col-10 off-1 down-5 xs-10 xs-off-1 xs-down-10">
      <div>
        <span class="color-code-1 px45">Hire us and testify !</span>
        <div><span class="px13 faded">Here's what our valuable clients say about Cutting edge Institute</span></div>
      </div>
      <div class="mother down-5 xs-down-15">
        <div class="col-4 xs-12">
          <div class="container">
             <div class="say-card bottom-50">
              <div class="container down-5 xs-down-5">
                <div class="mother">
                  <div class="col-1 xs-1">
                    <div class="btn-sm-curved  init-bg color-code-3 px13"><i class="fas fa-user"></i></div>
                  </div>
                  <div class="col-9 off-1 xs-8 xs-off-2 xs-down-3">
                    <div class="container down-1">
                      <div class="col-6 xs-8">
                        <span class="bold">Olosho Ayomide</span>
                        <div><span class="px13 faded">student, unilorin</span></div>
                      </div>
                      <div class="right col-6 xs-4 xs-down-5">
                        <span class="faded-light"><i class="fas fa-quote-right"></i></span>
                      </div>
                      </div>
                    </div>
                  </div>
                <div class="mother down-5 xs-down-10">
                  <span class="faded px13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini.
                  </span>
                </div>
                </div>
              </div>
            </div>
            <div class="hidden-ls xs-10 xs-down-8"><a href="javascript" class="btn-sm bg-color-code-1 px13 white">See All comment</a></div>
        </div>
        <div class="col-4 xs-12 hidden-xs">
          <div class="container">
             <div class="say-card bottom-50">
              <div class="container down-5 xs-down-5">
                <div class="mother">
                  <div class="col-1 xs-1">
                    <div class="btn-sm-curved  init-bg color-code-3 px13"><i class="fas fa-user"></i></div>
                  </div>
                  <div class="col-9 off-1 xs-8 xs-off-1 xs-down-3">
                    <div class="container down-1">
                      <div class="col-6 xs-8">
                        <span class="bold px13">Name here</span>
                        <div><span class="px13 faded">student, unilorin</span></div>
                      </div>
                      <div class="right col-6 xs-4 xs-down-5">
                        <span class="faded-light"><i class="fas fa-quote-right"></i></span>
                      </div>
                      </div>
                    </div>
                  </div>
                <div class="mother down-5 xs-down-5">
                  <span class="faded px13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini.
                  </span>
                </div>
                </div>
                <div class="hidden-ls xs-down-8"><a href="javascript" class="btn-sm bg-color-code-1 px13 white">See All comment</a></div>
              </div>
            </div>
          </div>
        <div class="col-4 hidden-xs">
          <div class="container">
             <div class="say-card bottom-50">
              <div class="container down-5 xs-down-5">
                <div class="mother">
                  <div class="col-1">
                    <div class="btn-sm-curved  init-bg color-code-3 px13"><i class="fas fa-user"></i></div>
                  </div>
                  <div class="col-10 off-1">
                    <div class="container down-1">
                      <div class="col-6">
                        <span class="bold px13">Name here</span>
                        <div><span class="px13 faded">student, unilorin</span></div>
                      </div>
                      <div class="right col-6">
                        <span class="faded-light"><i class="fas fa-quote-right"></i></span>
                      </div>
                      </div>
                    </div>
                  </div>
                <div class="mother down-5">
                  <span class="faded px13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini.
                  </span>
                </div>
                </div>
              </div>
            </div>
          </div>
      </div>
   </div>
</div>
<div class="mother bottom-50 bg-faded">
  <div class="col-10 off-1 down-5 xs-10 xs-off-1">
    <div class="col-5 xs-12">
      <div class="card">
        <div class="img-container"><iframe src=""></iframe></div>
      </div>
    </div>
    <div class="col-5 off-2 xs-12 xs-down-10">
      <div>
        <span class="px45 color-code-1 xs-px40">Our learning channel</span>
        <div class="down-5 mother xs-down-8"><span class="faded px13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation .</span></div>
        <div class="down-5 mother xs-down-8"><a href="" class="btn-sm bg-color-code-1 white px13"><i class="fab fa-youtube"></i> Visit channel</a></div>
      </div>
    </div>
  </div>
</div>
<div class="mother bottom-50">
  <div class="container">
    <div class="col-10 off-1 down-5">
      <div class="col-3">
        <div class="img-container"><img src="images/im1.jpg"></div>
      </div> <div class="col-3">
        <div class="img-container"><img src="images/im1.jpg"></div>
      </div> <div class="col-3">
        <div class="img-container"><img src="images/im1.jpg"></div>
      </div> <div class="col-3">
        <div class="img-container"><img src="images/im1.jpg"></div>
      </div>
    </div>
  </div>
</div>
<?php include'footer.php';?>
<script>
  var slide = document.querySelectorAll('.bg-landing');
  function initSlide(index){
    for(var i = 0; i < slide.length; i++){
      slide[i].style.display = 'none';
      slide[index].style.display = 'block';
    }
  }
 function init() {
  setTimeout(function(){
     initSlide(0)
  },0)
  setTimeout(function(){
     initSlide(1)
  },10000)
  setTimeout(function(){
     initSlide(2)
  },20000)
  setTimeout(function(){
     init();
  },30000)
 }
 init();
</script>
