<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' href='styles/toggle.css'>
    <link rel='stylesheet' type='text/css' href='styles/stix.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/0bcfce5b56.js" crossorigin="anonymous"></script>

    

</head>
<body class='lock-screen'>
    
    <div id="phone">
        <div id='phoneCamera'>
            <div id='speaker'></div>
            <div id='camera'></div>
        </div>
        <div id="phoneScreen">
            <div id='greenDiv'>
                <!-- <img id='menu' src='images/menu.svg' /> -->

                <div id='menu2'>
                    <div class='stixs' id='firstStix'></div class='stixs'>
                    <div class='stixs' id='secondStix'></div>
                    <div class='stixs' id='thirdStix'></div>
                </div>

                <!-- Hidden menu -->

                <div id='hiddenMenu'>
                    <div class='item animated fadeOutLeft'>
                        <span>
                            Create a post
                        </span>
                        <i class="fas fa-tasks"></i>
                    </div class='item animated fadeOutLeft'>
                    <div class='item animated fadeOutLeft'>
                        <span>
                            Create a project
                        </span>
                        <i class="far fa-folder"></i>
                    </div>
                    <div class='item animated fadeOutLeft'>
                        <span>
                            Create a category
                        </span>
                        <i class="fas fa-th"></i>
                    </div>
                </div>

                <h3>Browse</h3>
                <h6>Find popcast that suits on your interest</h6>

                <input type='text' id='input' placeholder='Search'/>

                <div id='iconHolder'>
                    <span class='iconsAndText'>
                        <span class='icons'>
                            <i class="glyphicon glyphicon-user"></i>

                        </span>
                        <p>User</p>
                    </span>

                    <span class='iconsAndText' id='settingsButton'>
                        <span class='icons'>
                            <i class="glyphicon glyphicon-cog"></i>

                        </span>
                        <p>Options</p>
                    </span>

                    <span class='iconsAndText'>
                        <span class='icons'>
                            <i class="glyphicon glyphicon-folder-close"></i>

                        </span>
                        <p>Archive</p>
                    </span>
                    
                </div>
            </div>

            <div id='whiteDiv'>
                <div id='slider'></div>

                <h2>Handpicked</h2>

                <div id="imagesHolder">
                    @if($data)
                        @foreach($data as $v)
                            <!-- Items -->
                            <div class="imageAndText">
                                <input type='hidden' value="{{$v['Id']}}" />
                                <img src='images/picture ({{$v['Id']}}).jpg' />
                                
                                <div class='text'>
                                    <h3>{{$v['header']}}</h3>
                                    <h4>{{$v['intro']}}</h4>
                                </div>
                            </div>
                        @endforeach
                   
                    @else
                        <p style='color:black;text-shadow:none'>No post's yet</p>
                    @endif

            </div>
        </div>
        <div id='articleMenu' class=''>
            <img src='https://picsum.photos/700/700?1' id='articleImage' style='max-width: 100%;'/>
            <div id='forMobileView'></div>


            <i class="fas fa-chevron-left" id='backButton' title='Върни се обратно'></i>

            <div id='articleHeader'>
                <h1>Minimalism<br /> Lifestyle</h1>
                <i class="fas fa-play-circle" title='Пусни'></i>
            </div>
            <p id='articleBody'>
                Beign the savege's bowsman,that is the person who pulled the bow-oar in his boat
            </p>

            <div id='autor'>
                <img src='https://scontent.fsof10-1.fna.fbcdn.net/v/t1.0-9/p960x960/76900740_3466049716770289_1169253706160406528_o.jpg?_nc_cat=102&_nc_ohc=MTs1UclewGAAQnCbfSWnz2SbYeEsVjdKpzix8Wx-CCFKxSmUtRZJbRGDQ&_nc_ht=scontent.fsof10-1.fna&oh=0dc557a007ad6b7c8bc6adaf59403758&oe=5E8110AC'>
                
                <div id='details'>
                    <h3>Grigor Borisov</h3>
                    <h5>23.5 followers</h5>
                </div>
            </div>

            <div id='iconsAutor'>
                <div class='icons'>
                    <i class="far fa-star"></i>
                    <span>Favorite</span>
                </div>
                <div class='icons'>
                    <i class="fas fa-assistive-listening-systems"></i>
                    <span>Trending</span>
                </div>
                <div class='icons'>
                    <i class="fas fa-concierge-bell"></i>
                    <span>Recent</span>
                </div>
            </div>
        </div>

        <div id='settings'>
            <div id='nav'>
                <i class="fas fa-chevron-left" id='closeSettings' title='Върни се обратно'></i>
                <img src='https://scontent.fsof10-1.fna.fbcdn.net/v/t1.0-9/p960x960/76900740_3466049716770289_1169253706160406528_o.jpg?_nc_cat=102&_nc_ohc=MTs1UclewGAAQnCbfSWnz2SbYeEsVjdKpzix8Wx-CCFKxSmUtRZJbRGDQ&_nc_ht=scontent.fsof10-1.fna&oh=0dc557a007ad6b7c8bc6adaf59403758&oe=5E8110AC' />
            </div>
            
            <main>
                <div class='settingHolder'>
                    <div class='textAndIcons'>
                        <img src='images/settings/account.svg' />
                        <h3>My account</h3>
                    </div>
                    <i class="fas fa-angle-down toggler"></i>
                </div>
                
                <!-- toggleItem -->

                <div class='ToggledItem' id='accountSettings'>
                    <div class='options'>
                        <span>Incognito</span>
                        
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <div class='options'>
                        <span>Show username</span>
                        
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <div class='options'>
                        <span>Remember password</span>
                        
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class='settingHolder'>
                    <div class='textAndIcons'>
                        <img src='images/settings/aperture.svg' />
                        <h3>Photograph</h3>
                    </div>
                    <i class="fas fa-angle-down toggler"></i>
                </div>

                <!-- toggleItem -->

                <div class='ToggledItem' id='photoSettings'>
                    <div class='options'>
                        <span>Auto focus</span>
                        
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <div class='options'>
                        <span>Flash point</span>
                        
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <div class='options'>
                        <span>Retouch</span>
                        
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                
                <div class='settingHolder'>
                    <div class='textAndIcons'>
                        <img src='images/settings/exit.svg' />
                        <h3>Log out</h3>
                    </div>
                </div>

            </main>
        </div>

        
    </div>
    <script src='script/main.js'></script>
</body>
</html>