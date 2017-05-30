<div id="data-container">    
    @if (!empty($dishes))
    <div id="data-dishes-container">
    @foreach ($dishes as $dish)
        <div id="card-r-9yRmcl8B2" class="card card-r _object-card " idx="9yRmcl8B2" rid="1281540" tsource="New dishes" addedinlistidxs="" onclick="window.open('{{url('dishes/'.$dish->id)}}', '_self')">
        <div class="inner">

            <div class="image">

                <a href="{{url('dishes/'.$dish->id)}}" class="_track" data-ftrack="{&quot;a&quot;:&quot;TL&quot;,&quot;b&quot;:&quot;SUCI&quot;,&quot;c&quot;:&quot;No Recipes&quot;}">
                    <img width="235px" height="235px"  src="{{ $dish->dishImage()->first()? url('storage/'.$dish->dishImage()->first()->path) : '' }}">
                    <!--<img width="235px" height="235px" class="img_l" onerror="this.src='/stx/images/235x235/noimg.jpg'; return true;" src="http://img03.foodily.net/img/235x235/a1ea798a12ee.jpg">-->
                </a>
            </div>	

            <div class="info">
                <div class="rating" id="rating" >
                            <input type="hidden" id="rate" value="{{$dish->rating}}">
                            <li class="undisplay icon-star-half dish_half_star1" id="half_star0" ></li>
                            <i class="icon_star"></i>
                            <li class="undisplay icon-star-half dish_half_star2" id="half_star1" ></li>
                            <i class="icon_star"></i>
                            <li class="undisplay  icon-star-half dish_half_star3" id="half_star2" ></li>
                            <i class="icon_star" ></i>
                            <li class="undisplay icon-star-half dish_half_star4" id="half_star3" ></li>
                            <i class="icon_star"  ></i>
                            <li class="undisplay icon-star-half dish_half_star5" id="half_star4" ></li>
                            <i class="icon_star"></i>
                    <!--(<a  href="#0" class="reviews"><small>{{ $dish->id }} reviews</small></a>)-->
                </div>
                @foreach($dish->category()->get() as $dishtype)
                <div class="dishtype_font">{{$dishtype->name}}</div>  
                @endforeach
                <a href="/r/9yRmcl8B2-spicy-crispy-chicken-by-no-recipes" class="_track" data-ftrack="{&quot;a&quot;:&quot;TL&quot;,&quot;b&quot;:&quot;SUCT&quot;,&quot;c&quot;:&quot;No Recipes&quot;}" ><center style="text-align: left;font-size: 20px;">{{ $dish->name }} </center></a>

                
                <a href="/r/9yRmcl8B2-spicy-crispy-chicken-by-no-recipes" class="count-txt"></a>
            </div>
            <div class="title">
                    <center>
                        <p class="reviews price_position" >${{ $dish->price }}</p>
                    </center>
                </div>
        </div>
    </div>
    @endforeach
    </div>
    <div class="pageDiv">
            {{ $dishes->links() }}
    </div>
    @endif


    @if (!empty($sellers))
    <div id="data-sellers-container">
    @foreach ($sellers as $seller)
        <div class="strip_list" style="height: 180px;" onclick="window.open('{{url('sellers/'.$seller->id)}}', '_self')">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <div class="desc" >

                    <div class="thumb_strip">
                        <a href="#">
                            <img style="width: 96px;height: 96px;" src="{{url('storage/'.$seller->icon)}}"  >
                        </a>
                    </div>
                    <div class="rating" id="rating"><h4 style="font-size: 15px;eidth:657px;height: 20px;line-height: 1.3!important;margin: 0px;">
                            <input type="hidden" id="rate" value="{{$seller->rating}}">
                            <li class="undisplay icon-star-half seller_half_star1" id="half_star0" ></li>
                            <i class="icon_star"></i>
                            <li class="undisplay icon-star-half seller_half_star2" id="half_star1" ></li>
                            <i class="icon_star"></i>
                            <li class="undisplay icon-star-half seller_half_star3" id="half_star2" ></li>
                            <i class="icon_star" ></i>
                            <li class="undisplay icon-star-half seller_half_star4" id="half_star3" ></li>
                            <i class="icon_star"  ></i>
                            <li class="undisplay icon-star-half seller_half_star5" id="half_star4" ></li>
                            <i class="icon_star"></i>
                        (<small><a href="#0"> {{$seller->rating_count}} reviews</a></small>)
                        </h4>
                    </div>
                    <h3>{{ $seller->kitchen_name }}</h3>

                    <div class="type">
                        @foreach($seller->sellerCategory()->get() as $sellerCategory)

                        {{$sellerCategory->name}}

                        @endforeach
                    </div>

                    <div class="location" style="width:100%;">
                        <a style="position: relative;top: -3px;"><img height="24px" width="24px" src="{{ URL::asset('/image/location.png')}}"></a>
                            {{$seller->address}} 
                            
                            <a style="position: relative;top: -3px;">&nbsp;<img height="24px" width="16px"  src="{{ URL::asset('/image/phone.png')}}"></a>
                        {{$seller->phone_number}}   Minimum order: $15
                    </div>
                    <span class="opening">Opens at 17:00.</span>
                    <ul>
                        @if(!empty($seller->deliverSetting()->get()->first()))
                            @if($seller->deliverSetting()->get()->first()->is_at_store == 1)
                                <li>Take Away<i class="icon_check_alt2 ok"></i></li>
                            @else
                                <li>Take Away<i class="icon_check_alt2 no"></i></li>
                            @endif
                            @if($seller->deliverSetting()->get()->first()->is_free_delivery ==1 || $seller->deliverSetting()->get()->first()->is_delivery_fee == 1)
                                <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                            @else
                                <li>Delivery<i class="icon_check_alt2 no"></i></li>
                            @endif
                        @else
                            <li>Take Away<i class="icon_check_alt2 no"></i></li>
                            <li>Delivery<i class="icon_check_alt2 no"></i></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="go_to">
                    <div>
                        <a href="{{url('sellers/'.$seller->id)}}" class="btn_1 btn_attr">View Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>
    <div class="pageDiv">
            {{ $sellers->links() }}
    </div>
    @endif


    @if (!empty($wishes))
    <div id="data-wishes-container">
    @foreach($wishes as $wish)
        <div class="strip_list">
        <div class="row">
            <div class="col-md-9 col-sm-9" style="width: 100%;">
                <table style="width: 100%;">
                    <tbody>
                        <tr>
                            <td style="width:67%;">
                                <div class="desc">
                                    @foreach($wish->user()->get() as $user)
                                    <div class="thumb_strip">
                                        <a href="#"><img class="wish_img" src="{{url('storage/'.$user->image)}}" alt=""></a> 
                                    </div>
                                    <h3 style="margin-bottom: 15px;padding-top: 10px;">{{$user->name}}</h3>
                                    @endforeach
                                    <div class="type">{{$wish->address}}</div>
                                </div>
                            </td>
                            <td >
                    <li class="wish_data"> 
                        Bidders:<a class="bidder_num"> {{$wish->bid()->count()}}</a>
                        @if(Auth::user()->isseller)
                        <div class="pull-right">
                            <a name="modifyBid" id="1" class="btn_full modal_btn" onclick="getBidData('{{$wish->id}}')">I want to bid</a>
                        </div>
                        @else
                        <div class="pull-right">
                            <a class="btn_full modal_btn" >Became a Seller</a>
                        </div>                                        
                        @endif
                    </li>
                    <li class="wish_data">Bidding End Date:<a style="color: red;margin-left: 45px;">{{$wish->end_date}}</a></li></li>
                    <li class="wish_data">Deliver/Pickup Date:<a style="color: red;margin-left: 25px;">{{$wish->pickup_time}}</a></li>
                    </td>
                    </tr>
                    <tr>
                        <td colspan ="2">
                            <div class="wishlist_cont">
                                <h3 class="wishlist_topic">{{$wish->topic}}</h3>
                                <table class="wishlist_info">
                                    <tr class="c_style">
                                        <td style="width: 25%;text-align: left;"><pre>&bull; Category:{{$wish->category->name}}</pre></td>
                                        <td style="width: 25%;"><pre>&bull; Quantity:{{$wish->quantity}}</pre></td>
                                        <td style="width: 30%;"><pre>&bull; Price Range:${{$wish->price_from}} ~ ${{$wish->price_to}}</pre></td>
                                        <td><pre>&bull; {{$wish->pickup_method}}</pre></td>
                                    </tr>
                                </table>

                                <li class="describe">{{$wish->description}}</li>

                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- End row-->
    </div><!-- End strip_list-->
    @endforeach
    </div>
    <div class="pageDiv">
            {{ $wishes->links() }}
    </div>
    @include("seller.bid-add")
    @endif
</div>


<script>
$(document).ready(function(){
  for(var i=0;i<$('.rating').length;i++)
  {
      $('#rating').eq(0).attr("id","rating"+i);
      $('#rate').eq(0).attr("id","rate"+i);
      
      var rate=$('#rate'+i).attr("value");
      var count=0;
      for(var j=1;j<rate+1;j++)
      {
          $('#rating'+i+' i').eq(count).addClass("voted");
          count++;
      }
      if(rate-count>0.25&&rate-count<0.75)
      {
          $('#rating'+i+' li').eq(count).removeClass("undisplay");
      }
      else if(rate-count>0.75){
          $('#rating'+i+' i').eq(count).addClass("voted");
      }
  }
  });
</script>
