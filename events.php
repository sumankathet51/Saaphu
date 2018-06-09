<?php $page = 'events'; include "includes/header.php"; 

$connection = mysqli_connect('localhost', 'root', '', 'saaphu_admin');
  
  if($connection){
    
    $query = "SELECT * FROM event;";
    
    $result = mysqli_query($connection, $query);

    if(!$result){
      die('Query Failed');
    }

  } else {
    die();
  }

?>
<style>
      
      .page-event {
        background-color: #212121;
        padding-bottom: 40px;
        font-family: "Varela Round", sans-serif;
      }
      .cover {
        background-color: #36353a;
        height: 360px;
        background-image: linear-gradient(to right, rgba(44, 83, 100, 0.4), rgba(32, 58, 67, 0.4), rgba(15, 32, 39, 0.4)), url(images/image.svg);
        background-position: center center;
        background-size: cover;
      }
      .cover .heading {
        font-family: 'Telefon Black';
        font-size: 243px;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        text-align: center;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        color: #ccc;
        transition: font-size 0.3s;
      }
      .cover .heading::first-letter {
        color: #DEA6CB;
      }
      .upcoming-sec {
        padding: 5vh 0;
        border-bottom: 1px solid #ccc;
      }
      .upcoming-sec .heading {
        font-size: 30px;
        color: #fff;
      }
      .upcoming-event-list {
        color: #ccc;
        background: #212121;
      }
      .upcoming-event-list .event-block {
        padding: 5vh 0;
        border-bottom: 1px solid #ccc;
      }
      .upcoming-event-list .event-block .sec-1,
      .upcoming-event-list .event-block .sec-2 {
        padding-bottom: 3vh;
      }
      .upcoming-event-list .event-block .sec-1 table .month {
        text-transform: uppercase;
        color: #DEA6CB;
        font-size: 30px;
      }
      .upcoming-event-list .event-block .sec-1 table .month-date-devider {
        width: 5vh;
        margin: 1vh 0;
        background-color: #3cbfaf;
        height: 5px;
      }
      .upcoming-event-list .event-block .sec-1 table .date {
        font-size: 60px;
        font-weight: bolder;
        line-height: normal;
      }
      .upcoming-event-list .event-block .sec-1 table .title {
        padding-left: 20px;
        vertical-align: top;
        font-size: 30px;
      }
      .upcoming-event-list .event-block .sec-2 img {
        width: 100%;
      }
      .upcoming-event-list .event-block .sec-3 .title {
        font-size: 30px;
        padding-bottom: 2vh;
      }
      .upcoming-event-list .event-block .sec-3 .venue table td {
        vertical-align: top;
      }
      .upcoming-event-list .event-block .sec-3 .venue table td i {
        color: #DEA6CB;
        padding-left: 3px;
        padding-right: 10px;
      }
      .upcoming-event-list .event-block .sec-3 .venue table td .dim-color a {
        color: rgba(204, 204, 204, 0.3);
      }
      .upcoming-event-list .event-block .sec-3 .time {
        padding-bottom: 3vh;
      }
      .upcoming-event-list .event-block .sec-3 .time table td {
        vertical-align: top;
      }
      .upcoming-event-list .event-block .sec-3 .time table td i {
        color: #DEA6CB;
        padding-right: 10px;
      }
      .upcoming-event-list .event-block .sec-3 .time table td .dim-color {
        color: rgba(204, 204, 204, 0.3);
      }
      .upcoming-event-list .event-block .sec-3 .sort-story {
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
      }
      .upcoming-event-list .event-block .sec-3 .group-of-btn {
        padding-top: 3vh;
      }
      .upcoming-event-list .event-block .sec-3 .group-of-btn .book-ticket {
        background-color: #3cbfaf;
        color: #fff;
        margin-bottom: 10px;
      }
      .page-heading {
        text-transform: uppercase;
        color: #fff;
        padding-bottom: 17px;
        word-break: break-all;
        padding: 10px;
      }
      .page-heading::first-letter {
        color: #DEA6CB;
      }
      @media (min-width: 992px) {
        .upcoming-event-list .event-block .sec-1 table .title {
          display: none;
        }
      }
      @media (max-width: 991px) {
        .cover .heading {
          font-size: 180px;
          padding-top: 7vh;
        }
        .upcoming-event-list .event-block .sec-3 .title {
          display: none;
        }
      }
      @media (max-width: 767px) {
        .cover .heading {
          font-size: 140px;
          padding-top: 11vh;
        }
      }
      @media (max-width: 575px) {
        .cover {
          height: 214px;
        }
        .cover .heading {
          font-size: 70px;
        }
        .upcoming-event-list .event-block .sec-1 table .month {
          font-size: 14px;
        }
        .upcoming-event-list .event-block .sec-1 table .date {
          font-size: 36px;
        }
        .upcoming-event-list .event-block .sec-1 table .title {
          padding-left: 20px;
          font-size: 20px;
          vertical-align: top;
        }
      }
      
        
        
        </style>
        <div class="page-event">
            <div class="cover">
              <div class="heading">events</div>
            </div>
            <div class="container">
              
              <?php while($row = mysqli_fetch_assoc($result)){
         echo '<div class="upcoming-event-list">
                <div class="event-block">
                  <div class="row">
                    <div class="col-lg-2 sec-1">
                      <table>
                        <tr>
                          <td>
                            <div class="month">'.substr($row['eventDate'], 3, 3). '</div>
                            <div class="month-date-devider"></div>
                            <div class="date">' .substr($row['eventDate'], 0, 2) .'</div>
                          </td>
                          <td class="title">'.$row['eventName'].'</td>
                        </tr>
                      </table>
                    </div>
                    <div class="col-lg-5 sec-2">
                      <img src="images/1.jpg" />
                    </div>
                    <div class="col-lg-5 sec-3">
                      <div class="title">'.$row['eventName'].'</div>
                      <div class="venue">
                        <table>
                          <tr>
                            <td><i class="fa fa-map-marker"></i></td>
                            <td>
                              <div>'.$row['location'].'</div>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <div class="time">
                        <table>
                          <tr>
                            <td><i class="fa fa-clock-o"></i></td>
                            <td>
                              <div>'. $row['eventDate'] . '</div>
                              <div data-livestamp="1517054400" class="dim-color"></div>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <div class="sort-story">'.$row["eventDetails"]. '</div>
                    </div>
                  </div>
                </div>
              </div>
              ';
          } ?>
            </div> 
          </div> 



<?php $page = 'events'; include "includes/footer.php"; ?>