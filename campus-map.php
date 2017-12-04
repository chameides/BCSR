<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campus Map</title>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<?php include '_inc/head-js-css.php'; ?>

  </head>
  <body class="has-hero no-mobile-nav">

  
<?php include '_inc/nav.php'; ?>

    <div class="container-fluid page-container">

      <div class="row-full-width">

        <!-- <img src="_images/campus-map/placeholder-map-menu.png" style="position: absolute; bottom: 30px; right: 50px; width: 354px; z-index: 1000;"> -->

        <div class="map-container">
          <div id="map-canvas"></div>
        </div>

        <!-- ====== this div will hold the select box ==== -->
        <div class="map-navigation">
          <h4 class="nav-head">Simon’s Rock Campus Map</h4>
          <div id="selection">Loading map...</div>
        </div>

      </div>

    </div><!-- /container-fluid -->

<?php include '_inc/footer.php'; ?>
    
<?php include '_inc/bottom-js.php' ?>

<script>
</script>

    <script>

<?php include '_js/map-footer-scripts-top.js'; ?>


var locations = [
  { 'name': 'Alumni Library', 'lat': 42.2110191793035, 'long': -73.3809962465773, 'zindex': 11, 'photo': 'alumni-library.jpg', 'description': 'provides print, media, and web based materials in a comfortable environment for studying and research. The book collection of over 75,000 titles is augmented by books available at Bard’s Stevenson Library (190,000 volumes). Electronic resources include over 14,000 full text periodicals, contracted specialized databases, and specially selected subject-oriented web pages.' },
  { 'name': 'Annex', 'lat': 42.207840911825, 'long': -73.3708801134997, 'zindex': 2, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Blodgett House', 'lat': 42.2085994535713, 'long': -73.3810245111538, 'zindex': 23, 'photo': 'blodgett-house.jpg', 'description': 'formerly the Blodgett family’s home, contains the offices of Admission and Insitutional Advancement, a dining room for special student and faculty events, and one of the College’s main meeting spaces.' },
  { 'name': 'Carriage House (Dorm)', 'lat': 42.209691, 'long': -73.3709828958793, 'zindex': 5, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Classroom Complex', 'lat': 42.2111675469602, 'long': -73.3801331411952, 'zindex': 13, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Cottage', 'lat': 42.2087438570199, 'long': -73.3706819783115, 'zindex': 4, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Crosby House (Dorm)', 'lat': 42.2098240241993, 'long': -73.3794429611184, 'zindex': 16, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Daniel Arts Center', 'lat': 42.2065545642471, 'long': -73.3808071933937, 'zindex': 25, 'photo': 'daniel-arts-center.jpg', 'description': 'provides performance, studio, and classroom facilities for the College’s art history, dance, music, studio arts and theater programs. It includes a 300-seat main stage, a 100-seat studio theater, dance studio, as well as painting/drawing studios, photography and electronic arts facilities. A separate shop building provides space for set construction as well as sculpture and ceramic studios.' },
  { 'name': 'Dining Hall', 'lat': 42.2093287279345, 'long': -73.3800363121491, 'zindex': 18, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Dolliver House (Dorm)', 'lat': 42.2101811888836, 'long': -73.3798255014871, 'zindex': 14, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Fisher Science and Academic Center', 'lat': 42.2091208247702, 'long': -73.3822375281422, 'zindex': 24, 'photo': 'fisher-science-and-academic-center.jpg', 'description': 'houses the College’s biology, chemistry, ecology, and physics laboratories; research labs for faculty and students; a greenhouse; computer and other classrooms and tutorial rooms; a 60-seat auditorium; and faculty offices.' },
  { 'name': 'Gatehouse', 'lat': 42.2043637838286, 'long': -73.3804964241508, 'zindex': 27, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Hall College Center', 'lat': 42.2108698294361, 'long': -73.3816648608903, 'zindex': 10, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Hill House (Dorm)', 'lat': 42.2092613171234, 'long': -73.3782788861635, 'zindex': 17, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Kellogg Music Center', 'lat': 42.2084050991767, 'long': -73.3801073149789, 'zindex': 22, 'photo': 'kellogg-music-center.jpg', 'description': 'houses most of the facilities for the College’s music program. The main floor is a 130-seat concert hall that is used for music performances, lectures, community meetings, and other College events. Downstairs, the building has a computer-assisted music learning center, a rehearsal studio, and storage for students’ instruments.' },
  { 'name': 'Kendrick House (Dorm)', 'lat': 42.2098690271155, 'long': -73.380344449237, 'zindex': 15, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Kilpatrick Athletic Center', 'lat': 42.2111166757638, 'long': -73.3834303939232, 'zindex': 9, 'photo': 'kilpatrick-athletic-center.jpg', 'description': 'offers state-of-the-art facilities for students to learn, enjoy, and perfect a wide variety of physical disciplines. The 58,000-square-foot center houses an eight-lane, 25-yard competition pool, multicourt gym, three racquetball/squash courts, elevated running track, fitness center with cardiovascular and weight training equipment, and rock-climbing wall.' },
  { 'name': 'Lake Mansfield', 'lat': 42.202373, 'long': -73.368659, 'zindex': 12, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Lecture Center', 'lat': 42.2111272099676, 'long': -73.3805666284778, 'zindex': 12, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Livingston Hall Student Union', 'lat': 42.208728605912, 'long': -73.3792771502366, 'zindex': 20, 'photo': 'livingston-hall-student-union.jpg', 'description': 'houses the offices of Student Affairs, Health and Counseling Services. It also contains meeting rooms, post office, bookstore, snack bar, lounge, performance space and a game room.' },
  { 'name': 'The Liebowitz Center for International Studies', 'lat': 42.2087761780833, 'long': -73.3862337415037, 'zindex': 7, 'photo': 'liebowitz-center.jpg', 'description': 'is a hub for students, faculty, and visitors, with offices for faculty in the Divisions of Social Studies and Language and Literature, classrooms with the latest in instructional technology, and meeting space for presentations and events related to international study. The Liebowitz also contains the Study Abroad office with information on the college’s Signature Programs and other study opportunities in the U.S. and abroad.' },
  { 'name': 'Orchard Houses', 'lat': 42.2029266703287, 'long': -73.3789599851506, 'zindex': 28, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Owl’s Nest', 'lat': 42.2083880817849, 'long': -73.3786887745395, 'zindex': 21, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Pebble House', 'lat': 42.2105776557641, 'long': -73.3869495112809, 'zindex': 8, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Pibly House (Dorm)', 'lat': 42.2085792439979, 'long': -73.3699659425813, 'zindex': 3, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Physical Plant', 'lat': 42.2060492511802, 'long': -73.3797783819885, 'zindex': 26, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Red Brick House', 'lat': 42.2081959214981, 'long': -73.3863788939274, 'zindex': 6, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'Security', 'lat': 42.2090078959619, 'long': -73.3792389701549, 'zindex': 19, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
  { 'name': 'White House', 'lat': 42.2076040242841, 'long': -73.3706794670049, 'zindex': 1, 'photo': '', 'description': 'Nunc sed turpis. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Vestibulum volutpat pretium libero.' },
];


var pathCoordsRaw = new Object();
var walkingPathCoordinates = new Object();
pathCoordsRaw['cyan'] = '-73.38330899733825,42.21088684947298,0 -73.38321022775146,42.21085988952685,0 -73.3831183465215,42.21082784556457,0 -73.38300154532385,42.21078949658749,0 -73.38295651266272,42.21074910314839,0 -73.382930244609,42.21068934766581,0 -73.38289961970119,42.21063736549788,0 -73.38284965753759,42.21059732918102,0 -73.38276431225168,42.2105511807185,0 -73.38263532893542,42.21052165662235,0 -73.38246499623658,42.210482213927,0 -73.38228980122607,42.21045025855698,0 -73.38211601112016,42.21042596476031,0 -73.38191547651016,42.2104509629613,0 -73.38176048724914,42.21046727387752,0 -73.3815897451928,42.21047296478622,0 -73.38141866900304,42.21046769437747,0 -73.38128249564755,42.21045755908747,0 -73.3812125164642,42.21046366564343,0 -73.381148789051,42.21049173537396,0 -73.38104581282288,42.21053245405705,0 -73.38096773489623,42.21056866621399,0 -73.3808489224033,42.21059873153525,0 -73.38071480577739,42.21062558613258,0 -73.38054002632576,42.21064950668324,0 -73.38046586622411,42.21067040888338,0 -73.38041318829411,42.21070999508871,0 -73.38035167497573,42.21076927056011,0 -73.3802856466187,42.21084017980481,0 -73.38020333699376,42.21089637968596,0 -73.38010892310741,42.21092255098988,0 -73.38002386513632,42.21093680586415,0 -73.38002175456235,42.21098588174524,0 -73.38003365541438,42.21101564252722,0';
pathCoordsRaw['yellow'] = '-73.38603600977618,42.20862869674811,0 -73.38553406649595,42.20872992346052,0 -73.38552010997715,42.20875397868397,0 -73.38560791531673,42.20889122439996,0 -73.38558971616506,42.20891944240079,0 -73.38549312096858,42.20894222198942,0 -73.3853653756513,42.20893812662486,0 -73.38524362812774,42.2089002911753,0 -73.38510757155437,42.20883997035685,0 -73.38495966306579,42.20872482940171,0 -73.38481083889866,42.20864281008384,0 -73.38464194384001,42.20858729425435,0 -73.38442165061045,42.2085457478077,0 -73.38422064740332,42.20854944235174,0 -73.38403753760575,42.20860461153743,0 -73.38385901758473,42.20865918695646,0 -73.38363068238714,42.20872629506576,0 -73.38335555960289,42.20885084492581,0 -73.38313958261811,42.20895619588893,0 -73.38290360835147,42.20904686714919,0 -73.38268067849468,42.20910382111255,0 -73.38242059637392,42.20918637098041,0 -73.38216103702831,42.20923594212836,0 -73.38202587910287,42.2092434276608,0 -73.38187677817731,42.20923863256144,0 -73.38171713055289,42.20921551381795,0 -73.38155816816288,42.20919238446599,0 -73.38139411395143,42.20915840476714,0 -73.38120060371182,42.20909611199909,0 -73.38100482263346,42.20902534104749,0 -73.38081683690689,42.2089594323528,0 -73.38069132234591,42.20894691902709,0 -73.38057533048972,42.20894480671586,0 -73.38044570419672,42.2089578302267,0 -73.38016062480006,42.20899437169908,0 -73.38000988671594,42.20901599581148,0 -73.38000770020193,42.20904858047807,0';
pathCoordsRaw['orange'] = '-73.38002646526311,42.2110213736457,0 -73.3799866223162,42.21096122332557,0 -73.37995208271674,42.21093657069071,0 -73.3799107077747,42.21092008891552,0 -73.37985305313933,42.21090227344182,0 -73.37980403797899,42.21086736691181,0 -73.37977926951676,42.21082117804738,0 -73.37975010811361,42.21073973090741,0 -73.37971730615048,42.21065016987821,0 -73.37966136159159,42.21054194616745,0 -73.37962284729595,42.21043467354117,0 -73.37955425481061,42.21029579426924,0 -73.37945303163184,42.21016869411664,0 -73.37938036814043,42.21003842058045,0 -73.3793199046606,42.20993120808541,0 -73.37924509706569,42.20982064264775,0 -73.37920615302517,42.20973838780265,0 -73.37918721472235,42.2095992250158,0 -73.37921393218269,42.20946290714031,0 -73.37927586683118,42.20935063074928,0 -73.37937420910869,42.20920979974968,0 -73.37950102425823,42.20909570707,0 -73.37960748582282,42.20901814312688,0 -73.37971988062606,42.20893143987643,0 -73.37980161265409,42.20886795056235,0 -73.37985675398033,42.20878896645723,0 -73.37987449347939,42.20872485925078,0 -73.37986243760199,42.20866557300856,0 -73.37983080596679,42.20863218481237,0 -73.37980209266318,42.2086093674133,0 -73.37976008981892,42.20858209342847,0 -73.37969527093389,42.20854952180521,0 -73.37962507082602,42.20852342010774,0 -73.37953051161846,42.20850556481847,0 -73.37946518827579,42.20848695084041,0 -73.37938340842693,42.20847685976052,0 -73.37929947245638,42.20847657342298,0 -73.37925009408443,42.2084874090392,0 -73.37922153466253,42.20852469724813,0 -73.3792249736876,42.20856302551648,0';
pathCoordsRaw['red'] = '-73.3801854419083,42.2084680860035,0 -73.38022548432409,42.20851518915069,0 -73.38026405003019,42.20851711339084,0 -73.38033635249789,42.2084838848239,0 -73.38040839741348,42.20844185297059,0 -73.38046443910685,42.20836063333832,0 -73.38045366697588,42.2082700448576,0 -73.38040198016641,42.20820338339889,0 -73.38035393033491,42.20813937555073,0 -73.38030523794599,42.20806002359528,0 -73.38026618154431,42.20796261717066,0 -73.38022439522543,42.20788334727099,0 -73.38023310884456,42.20784453452146,0 -73.38029433353034,42.20780993347644,0 -73.38037713757809,42.20778517040615,0 -73.38048103137928,42.20775748554033,0 -73.38057495309712,42.20773512579528,0 -73.3806308312049,42.20772373700336,0 -73.38066533753663,42.20770494108499,0 -73.38068537018759,42.20767600483298,0 -73.38069330670002,42.2076082148937,0 -73.38070933604493,42.20748496899626,0 -73.38074957276196,42.20721571749587,0 -73.38077676845181,42.2070527288271,0 -73.38080168407507,42.20691907724051,0';
pathCoordsRaw['purple'] = '-73.37922220449322,42.20855396428243,0 -73.37917086709578,42.20850278829523,0 -73.37909219042299,42.2085014221079,0 -73.37893105899842,42.20851792375973,0 -73.37872145222478,42.20858107854293,0 -73.37855925625543,42.20864652637042,0 -73.37834249953649,42.20873208755422,0 -73.37818113798627,42.20877399945807,0 -73.37793373273556,42.20880658928772,0 -73.37756597987131,42.20881953292476,0 -73.37704971680482,42.20880616368086,0 -73.37631377024223,42.20878008551596,0 -73.37564272508853,42.20881159478024,0 -73.37507858958877,42.20887606949923,0 -73.37472361257075,42.20892978581158,0 -73.37440369109696,42.20892863833451,0 -73.37417949172618,42.20884749739269,0 -73.37396868698725,42.20873819962188,0 -73.37371202369047,42.20857446589522,0 -73.37346639475385,42.20844645335825,0 -73.37323664195154,42.20831015970167,0 -73.3729774172606,42.20814894041161,0 -73.37277453126454,42.20805761252166,0 -73.37258158695111,42.20802514599033,0 -73.37233347362488,42.2080660697928,0 -73.37215030940045,42.20816660926392,0 -73.37199732384673,42.20826852020819,0 -73.37179422714136,42.20835672635009,0 -73.3715738778191,42.20836658010818,0 -73.37123872401359,42.2083465242773,0 -73.37095220330681,42.20832417369443,0 -73.37078977154437,42.20831145104924,0 -73.37065095560567,42.20830429096622,0 -73.37050155203301,42.20828888610749,0 -73.37029080828988,42.20828120290744,0 -73.37012900644901,42.20828627955222,0 -73.37001282742875,42.2083024264045,0 -73.36997210364697,42.20837911105501,0';

// var walkingPathCoordinates = new Object();
for (var path in pathCoordsRaw) {
  walkingPathCoordinates[path] = [];
  var coords = pathCoordsRaw[path].split(' ');
  for(var i = 0; i < coords.length; i++) {
    // console.log(coords[i]);
    var coordParts = coords[i].split(',');
    var mapPoint = new google.maps.LatLng(coordParts[1],coordParts[0]);
    walkingPathCoordinates[path].push(mapPoint);
  }
}

    </script>

  </body>
</html>