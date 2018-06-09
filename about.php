<?php $page = 'about'; include "includes/header.php"; ?>
<style>

  html, body {
  box-sizing: border-box;
}

body {
  color: #555;
  color: #7c8891;
  background: #ebedee;
  padding: 50px;
}
@media (max-width: 768px) {
  body {
    padding: 30px;
  }
}
@media (max-width: 420px) {
  body {
    padding: 10px;
  }
}

h1, h2 {
  margin-top: 10px;
}

h1 {
  line-height: 30px;
  color: #5e6f7c;
}

.wrapper {
  margin-top: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
@media (min-width: 768px) {
  .wrapper {
    height: 100%;
  }
}

.wrapper .container {
  transition: opacity 1s ease, -webkit-transform 1s ease;
  transition: transform 1s ease, opacity 1s ease;
  transition: transform 1s ease, opacity 1s ease, -webkit-transform 1s ease;
  -webkit-transform: translateY(-40px);
          transform: translateY(-40px);
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
}
.container.fadeIn {
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}

.container > div {
  box-sizing: border-box;
  padding: 50px 30px;
}
@media (max-width: 420px) {
  .container > div {
    padding: 40px 30px !important;
  }
}

.profile.prof1{
  background: rgba(0, 0, 0, 0.5) url(images/2.jpg) no-repeat top;
  background-position: center center;
  background-size: cover;
}
.profile.prof2{
  background: rgba(0, 0, 0, 0.5) url(images/17799051_616983565138634_2269532938299539406_n.jpg) no-repeat top;
  background-position: center center;
  background-size: cover;
}

.profile {
  position: absolute;
  text-align: center;
  width: 200px;
  color: #fff;
  background: rgba(0, 0, 0, 0.5) url(images/children3.jpg) no-repeat top;
  background-position: center center;
  background-size: cover;
  height: 520px;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
}
.profile .meta {
  position: relative;
  z-index: 1;
}
.profile .overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0));
}
.profile .avatar {
  width: 50%;
  border-radius: 50%;
  overflow: hidden;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.4);
}
.profile h2 {
  font-size: 22px;
  margin-bottom: 2px;
}
.profile .position {
  font-size: 13px;
}
.profile .social {
  padding-top: 15px;
}
.profile .social i {
  margin: 0 5px;
}
.profile a {
  color: #fff;
}

.portfolio {
  margin-left: 175px;
  padding: 50px !important;
}

@media (max-width: 670px) {
  .profile {
    position: relative;
    width: 100%;
    background-size: cover;
  }
  .profile h2 {
    font-size: 28px;
    margin-bottom: 5px;
  }

  .avatar {
    width: 80px !important;
  }

  .portfolio {
    margin: 0;
  }
}

ol li{
  color: #333;
  font-size: 25px;
}

</style>


<div class="wrapper">
  <div class="container">
    <div class="profile">
      <div class="meta"><img class="avatar" src="images/brand.png"/>
        <h2>Saaphu</h2>
        <div class="position">Education for all</div>
        <div class="social"><a href="https://www.facebook.com/SAA-PHU-131085320395130/"><i class="fa fa-facebook-square"></i></a></div>
      </div>
      <div class="overlay"></div>
    </div>
    <div class="portfolio">
      <h1>Introduction To Saaphu</h1>
      <p>Foundation of development of country is quality of education. Quality education is inalienable right and is ensured as fundamental right in Interim Constitution of Nepal, 2063 (2007 AD). Right to education is human right and right of every human being; either s/he is child, adult or senior citizen. In this context, SAA: PHU was established at Bhaktapur as per Organization Registration Act 2034 (1977 AD) with vision to ensure quality education to every person. </p>
      <p>“SAA: PHU” is nongovernmental organization established on 4th Bhadra 2071 BS (20th August 2014).  It is non political and autonomous, nonprofit making organization. Equity and equality to access adequate and quality education is the basic foundation concept of this organization.</p>

      <h1>Working Area</h1>
      <p>Currently, the working area of SAA: PHU is Bhaktapur District but working area will be extended in near future. </p>
</div>

<div class="profile prof2">
      <div class="meta"><img class="avatar" src="images/brand.png"/>
        <h2>Saaphu</h2>
        <div class="position">Education for all</div>
        <div class="social"><a href="https://www.facebook.com/SAA-PHU-131085320395130/"><i class="fa fa-facebook-square"></i></a></div>
      </div>      
      <div class="overlay"></div>
    </div>

    <div class="portfolio">
      <h1>Ongoing Projects</h1>
      <ol>
        <li>“One school one library: One community one library project”
        <p>For easy access of course books as well as extra books to students, library is one of main source. Thus, for the purpose of availability and accessibility of extra books to students this project has been designed. 
        <p>About 300 books have been collected from different individuals. People had voluntarily donated their used and not used books to us for purpose of establishing library. This is our ongoing and long term mission. Till date we have not established any library but we are in process of collecting and screening books.  Similarly we are planning to establishing e-library. </p>
        <p>We are in search of donors, so that we can hire a room, manage furniture and hire a librarian for smooth functioning of a library.</p>
        </li>
</ol>
        
      </div>

<div class="profile prof1">
      <div class="meta"><img class="avatar" src="images/brand.png"/>
        <h2>Saaphu</h2>
        <div class="position">Education for all</div>
        <div class="social"><a href="https://www.facebook.com/SAA-PHU-131085320395130/"><i class="fa fa-facebook-square"></i></a></div>
      </div>   
      <div class="overlay"></div>   
    </div>

    <div class="portfolio">
      <ol start="2">
        <li>“Aama Shikya project” (Mother Education Project)
        <p>Right to education is right of every person despite of gender and age. Bhaktapur is small district covering 119 sq.km. Total population of the district is 3,04,651 and among them 1,54,884 is male and 1,49,767 is female (as per data of CBS 2010). Among female population 1, 04,937 are literate and rest are illiterate i.e. 44,830 are illiterate. In the same way, female who only knows to write their name are listed as literate. Thus it can be presumed that numbers of illiterate women are more than 44,830. Hence this project is designed with objective to make mothers literate and another objective of this mission is to make people aware about need of education and importance of being literate. </p>
        
        </li>
        <p>And few more.....</p>
      </ol>

      <h1>Upcoming projects</h1>
      <ol>
        <li>Voice for Women Education project</li>
        <p> Activities:</p>
        <ol type="i">
          <li>Musical Street Drama</li>
          <li>Stories of Nepalese women: Importance of Education (Story Documentary)</li>
          <li>Book Publication on Women  whose life were changed due to education</li>
        </ol>

        <li>Youth Awareness </li>
        <p>Issues:</p>
        <ol type = "i">
          <li>Drug Abuse</li>
          <li>Sex Violence</li>
          <li>Pschosocial effects of Earthquake</li>
          <li>Reproductive health and reproductive health right</li>
        </ol>
        <li>Child Right education</li>
      </ol>

      </div>

  </div>


<?php include "includes/footer.php"; ?>