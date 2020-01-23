@extends('layouts.defaulthome') 

@section('content')
    
<div class="container mt-3"></div>
        <div class="row">
            
                        <div class="col-12">
                                
                                <h1 class="text-center">Travel freak Tourist Map</h1>
            
                                <p class="text-center">Explore Srilanka..!</p>
                                
                                <img id="Image-Maps-Com-image-maps-2020-01-19-004427" src="images/srilanka-map.png" border="0" width="622" height="886" orgWidth="622" orgHeight="886" usemap="#image-maps-2020-01-19-004427" class="mx-auto d-block image-fluid" alt="" />
                                <map name="image-maps-2020-01-19-004427" id="ImageMapsCom-image-maps-2020-01-19-004427">
                                <area  alt="" title="Srilanka middle" href="" shape="rect" coords="185,308,380,577" style="outline:none;" target="_self"  data-toggle="modal"  data-target="#Modalmiddle" />
                                <area  alt="" title=" Srilanka North" href="" shape="rect" coords="66,31,380,300" style="outline:none;" target="_self"   data-toggle="modal"  data-target="#Modalnorth"  />
                                <area  alt="" title="Srilanka South" href="" shape="rect" coords="49,582,500,772" style="outline:none;" target="_self"   data-toggle="modal"  data-target="#Modalsouth"  />
                                <area  alt="" title="Srilanka East" href="" shape="rect" coords="389,306,591,575" style="outline:none;" target="_self"     data-toggle="modal"  data-target="#Modaleast"/>
                                <area  alt="" title="Srilanka West" href="" shape="rect" coords="42,313,180,582" style="outline:none;" target="_self"   data-toggle="modal"  data-target="#Modalwest"  />
                                <area shape="rect" coords="620,884,622,886" alt="Image Map" style="outline:none;" title="Image Map" href="http://www.image-maps.com/index.php?aff=mapped_users_0" />
                                </map>
                        </div>
                       
                    <!--//header row-->
        
    </div>


    
<div class="modal  fade" tabindex="-1" id="Modalsouth" role="dialog">
	  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Explore Srilanka with travelfreak</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
              <p class="lead text-center mt-5">Top places you must visit in Southern part of srilanka</p>.
              <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <p class="text-center lead">Dondra</p>
                    <img src="/images/dondra.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Historically known as Devinuwara temple port town or Devinuwara temple town, 
                         Dondra was until the late 16th century a historic temple port town complex. A multi-religious site, 
                         its primary deity was the Buddhist god Upulvan. </p>
            </div><!--dondra-->
                
             <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <p class="text-center lead">Pinnawala</p>
                    <img src="/images/pinnawala.jpg" class="mx-auto d-block image-fluid" alt="">
                    <br>
                    <p class="text-center" >The Pinnawala Elephant Orphanage is situated northwest of the town of Kegalle,
                         halfway between the present capital Colombo and the ancient royal residence Kandy.
                         its founded in order to afford care and protection to the many orphaned Elephants
                          found in the jungles of Sri Lanka. </p>
             </div><!--pinnawala-->
             <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <p class="text-center lead">Galle Fort</p>
                    <img src="/images/gallefort.jpg" class="mx-auto d-block image-fluid" alt="">
                    <br>
                    <p class="text-center" >The Galle Fort, or Dutch Fort as it is also known, is a fortification first built
                         by the Portugese on the Southwestern coast of Sri Lanka. The initial fortifications, which were built in the 
                         late 16th century, were quite basic. However the fort underwent extensive modifications in the 17th century by the
                          Dutch. </p>
             </div><!--gallefort-->
             <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <p class="text-center lead">Mirissa</p>
                    <img src="/images/mirissa.jpg" class="mx-auto d-block image-fluid" alt="">
                    <br>
                    <p class="text-center" >Mirissa (Sinhala: මිරිස්ස) is a small town on the south coast of Sri Lanka, 
                    located in the Matara District of the Southern Province. . Mirissa's beach and nightlife make it a 
                    popular tourist destination. It is also a fishing port and one of the island's main whale and dolphin watching locations.  </p>
             </div><!--pinnawala-->


                </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	</div>


           
<div class="modal  fade" tabindex="-1" id="Modalwest" role="dialog">
	  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Explore Srilanka with travelfreak</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
              <p class="lead text-center mt-5">Top places you must visit in Western part of srilanka</p>.
              <div class="row">
                       
              <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"><!--devided to 1 raw 12 columns -->

                                <p class="text-center lead">Gangaramaya Temple</p>
                                <img src="/images/ganga1.jpg" class="mx-auto d-block image-fluid" alt="">
                                <br>
                                <p class="text-center" >Gangaramaya is one of the oldest & beautiful Buddhist temples located in centre of Colombo.It was
                                started by the famous scholar monk Hikkaduwe Sri Sumangala Nayaka Thera in the late 19th Century. </p>
                                </div><!-- info anout gangaramaya-->
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"><!--devided to 1 raw 12 columns -->

                                  <p class="text-center lead">Lotus tower</p>
                                  <img src="/images/lotus.jpg" class="mx-auto d-block image-fluid" alt="">
                                  <br>
                                  <p class="text-center" >Lotus Tower also referred to as Colombo Lotus Tower, is a tower of 356 m (1,168 ft), located in Colombo, Sri Lanka.
                                  It also reflects the symbolic landmark of Sri Lanka. the tower is currently the tallest self-supported structure in South Asia. </p>
                                  </div><!-- info anout lotus tower-->

                                  <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"><!--devided to 1 raw 12 columns -->

                                  <p class="text-center lead">Colombo Museum</p>
                                  <img src="/images/museum.jpg" class="mx-auto d-block image-fluid" alt="">
                                  <br>
                                  <p class="text-center" >National Museum of Colombo, also known as the Sri Lanka National Museum is one of two museums in Colombo.
                                   It is the largest museum in Sri Lanka. It is maintained by the Department of National Museum of the central government.
                                    The museum holds contains a collections of much importance to Sri Lanka such as the regalia of the country,. </p>
                                  </div><!-- info anout museum-->

                                  <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"><!--devided to 1 raw 12 columns -->

                                  <p class="text-center lead">Gall face</p>
                                  <img src="/images/museum.jpg" class="mx-auto d-block image-fluid" alt="">
                                  <br>
                                  <p class="text-center" > Galle Face is a 5 ha  ocean-side urban park, which stretches for 500 m  along the coast, 
                                  in the heart of Colombo, the financial and business capital of Sri Lanka. The promenade was initially laid out in 1859 by 
                                  Governor Sir Henry George Ward.</p>
                                  </div><!-- info anout museum-->

                </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	</div>
          
  <div class="modal  fade" tabindex="-1" id="Modaleast" role="dialog">
	  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Explore Srilanka with travelfreak</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
              <p class="lead text-center mt-5">Top places you must visit in Western part of srilanka</p>.
              <div class="row">
                       
              <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"><!--devided to 1 raw 12 columns -->

                                <p class="text-center lead">Yala National park</p>
                                <img src="/images/yala.jpg" class="mx-auto d-block image-fluid" alt="">
                                <br>
                                <p class="text-center" >Yala (යාල) National Park is the most visited and second largest national park in Sri Lanka, 
                                bordering the Indian Ocean. The park consists of five blocks, two of which are now open to the public,
                                 and also adjoining parks. The blocks have individual names such as, Ruhuna National Park, and Kumana National Park </p>
                                </div><!-- info anout gangaramaya-->

                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"><!--devided to 1 raw 12 columns -->

                                <p class="text-center lead">Arugam bay surfing</p>
                                <img src="/images/arugambay.jpg" class="mx-auto d-block image-fluid" alt="">
                                <br>
                                <p class="text-center" >Arugam Bay  is a bay situated on the Indian Ocean in the dry zone of Sri Lanka's southeast coast,
                                 and a historic settlement of the ancient Batticaloa Territory . The bay is located 117 kilometres (73 mi) south of Batticaloa. 
                                 </p>
                                </div><!-- info anout arugam bay-->

                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"><!--devided to 1 raw 12 columns -->

                                <p class="text-center lead">Muhud maha viharaya</p>
                                <img src="/images/muhudumaha.jpg" class="mx-auto d-block image-fluid" alt="">
                                <br>
                                <p class="text-center" > Muhudu Maha Vihara  is a Buddhist temple situated at Pottuvil in Ampara District,
                                 Eastern province of Sri Lanka.[2] This temple which is situated near a wide beach, has been built over 2000 years
                                  ago by King Kavan Tissa of Ruhuna.  </p>
                                </div><!-- info anout gangaramaya-->

                </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	</div>







            
<div class="modal  fade" tabindex="-1" id="Modalnorth" role="dialog">
	  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Explore Srilanka with travelfreak</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
              <p class="lead text-center mt-5">Top places you must visit in North part of srilanka</p>.
              <div class="row">
                       
              <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"><!--devided to 1 raw 12 columns -->

                                <p class="text-center lead">Nallur Temple</p>
                                <img src="/images/nallur.jpg" class="mx-auto d-block image-fluid" alt="">
                                <br>
                                <p class="text-center" >Nallur Kandaswamy Kovil  is a significant Hindu temple, located in Nallur, Northern Province, Sri Lanka.
                                 The presiding deity is Lord Murugan or Katharagama Deviyo in the form of the holy 'Vel' in the Sanctum, and Thendayuthapani,
                                   sans consorts in secondary shrines in the temple. </p>
                                </div><!-- info anout nallur-->

                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"><!--devided to 1 raw 12 columns -->

                                <p class="text-center lead">Wilpattu park</p>
                                <img src="/images/wilpattu.jpg" class="mx-auto d-block image-fluid" alt="">
                                <br>
                                <p class="text-center" >Wilpattu National Park (Willu-pattu; Land of Lakes) is a park located on the island of Sri Lanka. 
                                The unique feature of this park is the existence of "Willus" - Natural, sand-rimmed water basins or depressions that fill with rainwater. 
                                Located in the Northwest coast lowland dry zone of Sri Lanka </p>
                                </div><!-- info anout wilpattu-->  

                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"><!--devided to 1 raw 12 columns -->

                                <p class="text-center lead">Ruwanwali saya</p>
                                <img src="/images/ruwanwalisaya.jpg" class="mx-auto d-block image-fluid" alt="">
                                <br>
                                <p class="text-center" >The Ruwanwelisaya is a stupa and a hemispherical structure containing relics, in Sri Lanka, 
                                considered sacred to many Buddhists all over the world.[1] It was built by King Dutugemunu. 140 B.C., who became King of all
                                 Sri Lanka after a war in which the Chola King Elāra was defeated. It is also known as "Mahathupa" </p>
                                </div><!-- info anout ruwanwalisay--> 

                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"><!--devided to 1 raw 12 columns -->

                                <p class="text-center lead">Jaffna fort</p>
                                <img src="/images/jaffnafort.jpg" class="mx-auto d-block image-fluid" alt="">
                                <br>
                                <p class="text-center" >Jaffna Fort is a fort built by the Portuguese at Jaffna, Sri Lanka
                                 in 1618 under Phillippe de Oliveira following the Portuguese invasion of Jaffna. The fort is located 
                                 near the coastal village of Gurunagar.  </p>
                                </div><!-- info anout ruwanwalisay-->               

                </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	</div>



    <div class="modal  fade" tabindex="-1" id="Modalmiddle" role="dialog">
	  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Explore Srilanka with Travelfreak</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
              <p class="lead text-center mt-5">Top places you must visit in Middle part of srilanka</p>.
          <!-- gangaramaya card-->
        <div class="row">
           

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <p class="text-center lead">Dambulla Temple</p>
                    <img src="/images/dambulla.jpg" class="mx-auto d-block image-fluid" alt="">
                    <br>
                    <p class="text-center" >The Rock Temple of Dambulla, called Jumbukola Vihara in 
                        the (Mahavamsa)-the principal Pali Chronicle of Sri Lanka is situated about forty seven miles north
                         west of Kandy, the last capital of the Sinhalese kings, on the main road to Anuradhupura. </p>
            </div><!--dambulla-->

            

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <p class="text-center lead">Nine Arch Bridge</p>
                    <img src="/images/9archa.jpg" class="mx-auto d-block image-fluid" alt="">
                    <br>
                    <p class="text-center" >One of the highlights in the mountain village Ella is the 30-meter high Demodara Nine Arch Bridge.
                         With a small 30-minute walk through the jungle, you will reach a piece of beautiful architecture that is hidden between 
                         lush green tea fields. </p>
             </div><!--9arch-->

            
             <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <p class="text-center lead">Sigiriya</p>
                    <img src="/images/sigiriya.jpg" class="mx-auto d-block image-fluid" alt="">
                    <br>
                    <p class="text-center" >Referred by locals as the Eighth Wonder of the World this ancient palace and fortress complex
                         has significant archaeological importance and attracts thousands of tourists every year. It is probably the most
                          visited tourist destination of Sri Lanka. </p>
             </div><!--sigiriya-->

             
             <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <p class="text-center lead">Sigiri Frescoes</p>
                    <img src="/images/frescoes.jpg" class="mx-auto d-block image-fluid" alt="">
                    <br>
                    <p class="text-center" >The Sigiriya Frescoes were painted on the western surface of Sigiriya Rock which is located in
                         the Matale District of central Sri Lanka. They were the highlight of a massive palace complex built in 480AD 
                         by King Kasyapa. Today only a few survive in a small pocket half-way up the rock. </p>
             </div><!--frescoes-->

             
             
            
                </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
<!--South map-->


@endsection 