<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoffeeStyle3</title>
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/main3.css">


</head>
<body>

<div class="container">

    <div class="menu-block">
        <img src='images/logo.png'/>

        <ul class='menu-list'>
            <li><a href="?">Home</a></li>
            <li><a href="?">About</a></li>
            <li><a href="?">Contacts</a></li>
        </ul>

    </div>

    <div class="r1">
        <div class="left"></div>


        <div class="center">


{{--банер--}}

        @foreach($fff as $f)
            <div class="r1" style="background-image: url({{ Storage::url($f->file) }}); height: 100%; background-size: cover">
                <div class="t1">
                    <div class="text1">{{$f->title}}</div>
                    <div class="text1">{{$f->big_title}}</div>
                    <div class="text1">{{$f->long_title}}</div>
                    <div class="text1">{{$f->white_title}}</div>
                </div>
            </div>
            @endforeach



        </div>


        <div class="right"></div>
    </div>

    <div class="trr">
        <div class="r2">
            <div class="textr2">
                Even the all-powerful Pointing has no control about the blind texts.
            </div>
        </div>
    </div>

    <div class="trr">
        <div class="r3">
            <div class="textr3">
                It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
            </div>
        </div>
    </div>
    <div class="trr">
        <div class="r4">
            <div class="textr4">
                Read the full Story
            </div>
        </div>
    </div>
    <div class="trr">
        <div class="rectangle"></div>
    </div>


{{--    *************************************************************************--}}
@foreach($uuu as $section)
    <div class="trr">
        <div class="r5">
            <div class="rectangle2"></div>
            <div class="rectangle3">{{ $section->name_section }}</div>
            <div class="rectangle4"></div>
        </div>
    </div>
    @endforeach


{{--    *****************************************************--}}

{{--    @foreach($pr as $prod)--}}
{{--    <div class="trr">--}}

{{--        <div class="image rrr">--}}

{{--            <div class="image1 ggg" style="background-image: url({{ Storage::url($prod->file) }})">--}}
{{--                <div class="ti1">{{ $prod->name }}</div>--}}
{{--                <div class="price1">$ {{ $prod->price }}</div>--}}
{{--                <div>$ {{ $prod->old_price }}</div>--}}
{{--            </div>--}}


{{--        </div>--}}

{{--    </div>--}}
{{--    @endforeach--}}

{{--    *********************************--}}

    <div class="trr">
        @foreach($pr as $prod)
        <div class="image">

            <div class="image1 hjk" style="background-image: url({{ Storage::url($prod->file) }})" >
                <div class="ti1">{{ $prod->name }}</div>
                <div class="price1">$ {{ $prod->price }}</div>
                <div>$ {{ $prod->old_price }}</div>
            </div>

{{--            <div class="image2">--}}
{{--                <div class="ti2">Golden Designers Mug</div>--}}
{{--                <div class="price2">--}}
{{--                    <div class="p50">$50.00</div>--}}
{{--                    <div class="p69">$ 69.00 USD</div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
        @endforeach
    </div>
{{--    *********************************--}}



    <div class="trr">
        <div class="r6">
            <div class="rectangle2"></div>
            <div class="rectangle3">More Products</div>
            <div class="rectangle4"></div>
        </div>
    </div>


{{--main product ************************************************--}}

    <div class="trr">
        @foreach($mpr as $mpp)
        <div class="image">
            <div class="image3" style="background-image: url({{ Storage::url($mpp->file) }})">
                <div class="ti3">{{ $mpp->name }}</div>
                <div class="price2">
                    <div class="p50">$ {{ $mpp->price }}</div>
                    <div class="p69">$ {{$mpp->old_price}}</div>
                </div>
            </div>

{{--            <div class="image4">--}}
{{--                <div class="ti3">Black Tea Cup</div>--}}
{{--                <div class="price2">--}}
{{--                    <div class="p50">$15.00</div>--}}
{{--                    <div class="p69">$ 29.00 USD</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="image5">--}}
{{--                <div class="ti3">B&W Essentials Mug</div>--}}
{{--                <div class="price2">--}}
{{--                    <div class="p50"></div>--}}
{{--                    <div class="p69">$ 19.00 USD</div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
        @endforeach
    </div>


{{--    <div class="trr">--}}
{{--        <div class="image">--}}
{{--            <div class="image6">--}}
{{--                <div class="ti3">Winter Style Mug</div>--}}
{{--                <div class="price2">--}}
{{--                    <div class="pc2">$ 25.00 USD</div>--}}
{{--                    <div class="p69"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="image7">--}}
{{--                <div class="ti3">Black Tea Cup</div>--}}
{{--                <div class="price2">--}}
{{--                    <div class="pc2">$ 46.00 USD</div>--}}
{{--                    <div class="p69"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="image8">--}}
{{--                <div class="ti3">B&W Essentials Mug</div>--}}
{{--                <div class="price2">--}}
{{--                    <div class="pc2">$ 34.00 USD</div>--}}
{{--                    <div class="p69"></div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="trr">--}}
{{--        <div class="image">--}}
{{--            <div class="image9">--}}
{{--                <div class="ti3">Espresso Cup by Mugs.co</div>--}}
{{--                <div class="price2">--}}
{{--                    <div class="pc2">$ 25.00 USD</div>--}}
{{--                    <div class="p69"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="image10">--}}
{{--                <div class="ti3">Pink Premium Ceramic</div>--}}
{{--                <div class="price2">--}}
{{--                    <div class="pc2">$ 99.00 USD</div>--}}
{{--                    <div class="p69"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="image11">--}}
{{--                <div class="ti3">Summer Designer Cup</div>--}}
{{--                <div class="price2">--}}
{{--                    <div class="pc2">$ 29.00 USD</div>--}}
{{--                    <div class="p69"></div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}


    <div class="trr">
        <div class="r7">
            <div class="rectangle2"></div>
            <div class="rectangle3">Buy 2 mugs and get a coffee magazine free</div>
            <div class="rectangle4"></div>
        </div>
    </div>




    <div class="trr">
        <div class="image_1_1">
            <div class="image12"></div>

            <div class="image13">
                <div class="i13_1">
                    <div class="i13_1_1"></div>
                </div>
                <div class="i13_2">
                    <div class="i13_1_2"></div>
                </div>
            </div>
        </div>
        <div class="image_14">
            <div class="image14">
                <div class="it_1">
                    <div class="it_1_1">Premium Offer</div>
                </div>
                <div class="it_2">
                    <div class="it_1_2">Get our Coffee Magazine</div>
                </div>
                <div class="it_3">
                    <div class="it_1_3">The most versatile furniture system ever created. Designed to fit your life.</div>
                </div>
                <div class="it_4">
                    <div class="it_1_4">Start Shopping</div>
                </div>
            </div>
        </div>
    </div>

    <div class="long_main">
        <div class="long"></div>
    </div>


    <div class="trr">
        <div class="r8">
            <div class="rectangle2"></div>
            <div class="rectangle3">Behind the mugs, lifestyle stories</div>
            <div class="rectangle4"></div>
        </div>
    </div>



    <div class="image">
        @foreach($sssss as $r)
        <div class="image16" style="background-image: url({{ Storage::url($r->file) }})">
            <div class="t_i16">{{ $r->title }}</div>
            <div class="t_i17">{{ $r->text }}</div>
            <div class="t_i18">{{ $r->date }}</div>
        </div>
        @endforeach



    </div>


    <div class="rectangle2">
        <div class="rb">

            <div class="r1">
                <div class="rb_t1">
                    <div>Sign up and get free coffee bags</div>
                </div>
            </div>

            <div class="r1">
                <div class="rb_t2">
                    <div>Coffee Updates</div>
                </div>
            </div>

            <div class="rb_t3">
                <div class="rb_t3_table">customer @coffestyle.io</div>
                <div class="rb_t3_table2">subscribe</div>
            </div>

        </div>
    </div>


    <div class="main_the_end">
        <div class="the_end">
            <div class="the_end_1"></div>
            <div class="the_end_2">Delivering the best coffee life since 1996. From coffee geeks to the real ones.</div>
            <div class="the_end_3">CoffeeStyle Inc. © 1996</div>
        </div>


        <div class="the_end">
            <div class="the_end_4">Menu</div>
            <div class="the_end_5">Home</div>
            <div class="the_end_6">Our Products</div>
            <div class="the_end_7">About</div>
            <div class="the_end_8">Contact</div>
            <div class="the_end_9">Styleguide</div>

        </div>

        <div class="the_end">
            <div class="the_end_10">Follow Us</div>
            <div class="the_end_11">Facebook</div>
            <div class="the_end_12">Instagram8</div>
            <div class="the_end_13">Pinterest</div>
            <div class="the_end_14">Twitter</div>

        </div>
        <div class="the_end">
            <div class="the_end_15">Contact Us</div>
            <div class="the_end_16">We’re Always Happy to Help</div>
            <div class="the_end_17">us@coffeestyle.io</div>
            <div class="the_end_18">Powered by Webflow</div>
        </div>

    </div>
</div>


</body>
</html>
