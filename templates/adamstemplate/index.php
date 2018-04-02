
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <jdoc:include type="head" />
        <!-- Bootstrap core CSS -->

        <!-- Custom styles for this template -->
        <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/custom2.css" rel="stylesheet">

        <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.js"></script>
        <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/bootstrap.js"></script>
        
        <style>
            h4 {
                display: block;
                -webkit-margin-before: 1.33em;
                -webkit-margin-after: 1.33em;
                -webkit-margin-start: 0px;
                -webkit-margin-end: 0px;
                box-sizing: inherit;
                line-height: 0.7;
            }
        </style>
    </head>

    <body style="display: block; box-sizing: inherit; margin: 0; padding: 0; min-width: 350px; font-family: Arial, Sans-serif; font-size: 13px; line-height: 1.5; color: #303030; background-attachment: scroll;">
        <div id="container" style="width: 100%; max-width: 100%; margin: 0 auto;">
            <div id="header" style="width: 100%; border-bottom: 3px solid #003098; padding-bottom: 5px; display: block; min-height: 0px; background: white;">
                <div id="header-logo" style="display: block; max-width: 100%; float: none; margin-left: auto; margin-right: auto; width: 700px;">
                    <a href="http://dfens-cz.com/"><img src="http://dfens-cz.com/wp-content/uploads/2015/12/kbaddxsb_882cfcb550011edc7f9d76ecd61d3520.png" alt="D-FENS Weblog" style="box-sizing: inherit; margin-top: 8px;"/></a>
                </div>
            </div>
            <div id="main" style="display: block; box-sizing: inherit; background-color: #ffffff; padding: 5px; width: 99,9%; max-width: 100%; height: 500px;">
                <div id="leftSidebar" style="width: 15%; padding: 5px; display: block; margin-right: 0; float: left; box-sizing: border-box;">
                    <div id="leftText" style="display: block; box-sizing: inherit;">
                        <div id="mainMenu" style="padding: 8px; margin: 0 0 10px; background-color: #FFF; box-shadow: none; border: none; word-wrap: break-word; display: block; box-sizing: inherit;">    
                            <h4 style="color: #FFF;font-family: Arial CE, Helvetica CE ,Arial,Verdana,lucida,sans-serif;font-size: 13px;font-weight: bold;margin: -8px -8px 8px;padding: 4px 8px;text-shadow: none; background-color: #003098; border-top-right-radius: 2px; border-bottom-right-radius: 2px;">Hlavní menu</h4>
                            <div id="mainMenuContainer" style="word-wrap: break-word; max-width: 100%; display: block; box-sizing: inherit;">
                                <ul id="mainMenuList" style="list-style: none; vertical-align: baseline; margin-top: 4px; margin-bottom: 8px; border: none; max-width: 100%; padding: 0 4px; ">
                                    <li id="mainMenuItem" style="font-size: 14px; vertical-align: baseline; display: list-item; text-align: -webkit-match-parent; word-wrap: break-word; font-family: sans-serif; font-weight: normal; line-height: 1.5; box-sizing: inherit; color: #303030; border-bottom: 1px solid #E0E0E0; padding: 5px 0; margin: 0;list-style: none;"><a href="" style="color: #035d8a; font-size: 14px; cursor: pointer; text-decoration: none;">Hlavní stránka</a></li>
                                    <li id="StatsItem" style="font-size: 14px; vertical-align: baseline; display: list-item; text-align: -webkit-match-parent; word-wrap: break-word; font-family: sans-serif; font-weight: normal; line-height: 1.5; box-sizing: inherit; color: #303030; border-bottom: 1px solid #E0E0E0; padding: 5px 0; margin: 0;list-style: none;"><a href="statistics" style="color: #035d8a; font-size: 14px; cursor: pointer; text-decoration: none;">Statistiky</a></li>
                                    <li id="GuestBookItem" style="font-size: 14px; vertical-align: baseline; display: list-item; text-align: -webkit-match-parent; word-wrap: break-word; font-family: sans-serif; font-weight: normal; line-height: 1.5; box-sizing: inherit; color: #303030; border-bottom: 1px solid #E0E0E0; padding: 5px 0; margin: 0;list-style: none;"><a href="guest_book" style="color: #035d8a; font-size: 14px; cursor: pointer; text-decoration: none;">Kniha hostů</a></li>
                                    <li id="AutorsItem" style="font-size: 14px; vertical-align: baseline; display: list-item; text-align: -webkit-match-parent; word-wrap: break-word; font-family: sans-serif; font-weight: normal; line-height: 1.5; box-sizing: inherit; color: #303030; border-bottom: 1px solid #E0E0E0; padding: 5px 0; margin: 0;list-style: none;"><a href="web_autors" style="color: #035d8a; font-size: 14px; cursor: pointer; text-decoration: none;">Autoři webu</a></li>
                                    <li id="CategoryItem" style="font-size: 14px; vertical-align: baseline; display: list-item; text-align: -webkit-match-parent; word-wrap: break-word; font-family: sans-serif; font-weight: normal; line-height: 1.5; box-sizing: inherit; color: #303030; border-bottom: 1px solid #E0E0E0; padding: 5px 0; margin: 0;list-style: none;"><a href="index.php/kategorie" style="color: #035d8a; font-size: 14px; cursor: pointer; text-decoration: none;">Kategorie</a></li>
                                    <li id="ChlivekItem" style="font-size: 14px; vertical-align: baseline; display: list-item; text-align: -webkit-match-parent; word-wrap: break-word; font-family: sans-serif; font-weight: normal; line-height: 1.5; box-sizing: inherit; color: #303030; padding: 5px 0; margin: 0;list-style: none;"><a href="chlivek" style="color: #035d8a; font-size: 14px; cursor: pointer; text-decoration: none;">Chlívek</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="faq" style="display: block; box-sizing: inherit;">    
                            <div id="faqContainer" style="padding: 8px; margin: 0 0 10px; background-color: #FFF; box-shadow: none; border: none; word-wrap: break-word; display: block; box-sizing: inherit;">
                                <h4 style="color: #FFF;font-family: Arial CE, Helvetica CE ,Arial,Verdana,lucida,sans-serif;font-size: 13px; font-weight: bold;margin: -8px -8px 8px;padding: 4px 8px;text-shadow: none; background-color: #003098; border-top-right-radius: 2px; border-bottom-right-radius: 2px;">FAQ</h4>
                                <div id="mainMenuContainer" style="word-wrap: break-word">
                                    <div id="mainMenuContainer" style="word-wrap: break-word; max-width: 100%; display: block; box-sizing: inherit;">
                                        <p><a href="/jak-se-stat-autorem/" style="margin: 4px 0 12px; text-decoration: none; color: #035d8a;">Jak se stát autorem?</a> </p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        
                    </div>
                </div>
                
                <?php if($this->countModules('box6')) : ?>
                <div id="rightSidebar" style="display: block; float: right; margin-left: -4px; width: 16%; padding: 5px; box-sizing: border-box; height: 500px;">
                    <div id="rightText" style="display: block; box-sizing: inherit;">
                        <div id="login" style="display: block; box-sizing: inherit; padding: 8px; margin: 0 0 10px; background-color: #FFF; box-shadow: none; border: none; word-wrap: break-word; ">
                            <h4 style="color: #FFF;font-family: Arial CE, Helvetica CE ,Arial,Verdana,lucida,sans-serif;font-size: 13px;font-weight: bold;margin: -8px -8px 8px;padding: 4px 8px;text-shadow: none; background-color: #003098; border-top-right-radius: 2px; border-bottom-right-radius: 2px;">Přihlásit se</h4>
                            <div id="logInForm" style="max-width: 100%; display: block; box-sizing: inherit;">
                                <jdoc:include type="modules" name="box5" style="none"/>
                            </div>
                        </div>    
                    </div>
                </div>
                
                <div id="content" style="display: block; overflow-y: hidden; width: auto; padding: 5px; box-sizing: border-box; height: auto;">
                    <div id="contentText" style="box-sizing: inherit; display: block;">
                        <div id="announcement" style="display: block; box-sizing: inherit;">
                            <div id="announcement2" style="display: block; box-sizing: inherit; padding: 8px; margin: 0 0 10px; background-color: #FFF; box-shadow: none; border: none; word-wrap: break-word; ">
                                <h4 style="color: #FFF;font-family: Arial CE, Helvetica CE ,Arial,Verdana,lucida,sans-serif;font-size: 13px;font-weight: bold;margin: -8px -8px 8px;padding: 4px 8px;text-shadow: none; background-color: #003098; border-top-right-radius: 2px; border-bottom-right-radius: 2px;">Důležitá upozornění pro čtenáře</h4>
                                <div id="announcementText" style="max-width: 100%; display: block; box-sizing: inherit;">
                                    <p style="font-size: 12px; margin: 4px 0 12px;">
                                        <b>1.</b>
                                        Články zveřejněné na těchto stránkách se často týkají jevů či věcí, které se autorům článků nelíbí nebo na ně chtějí z různých příčin poukázat. Čtením těchto textů můžete přijít o iluze, které vám nikdo nebude nahrazovat jinými. 
                                        </br>
                                        <b>
                                            2.
                                        </b>
                                        Veškerá podobnost popisovaných osob, jevů nebo věcí s reálně existujícími osobami, jevy nebo věcmi je čistě náhodná. 
                                        </br>
                                        <b>
                                            3.

                                        </b>
                                        Většina zde publikovaných textů je politicky nekorektní, xenofobní, sexistická, nacionalistická, heterosexuální, rasistická, záštiplná, obsahuje sprostá slova nebo alespo?  překlepy a gramatické chyby.
                                        </br>
                                        <b>
                                            4.
                                        </b>
                                        Můžete vyjádřit váš názor v diskusi, nečekejte ale, že s Vámi někdo bude souhlasit, odpovídat Vám nebo se Vám omlouvat.
                                        </br>
                                        <b>
                                            5.
                                        </b>
                                        Obsah článků a diskusí k nim závisí na rozhodnutí autorů, obsah stránek pak na libovůli majitele webu (D-FENS).
                                        </br>
                                        <b>
                                            6. Pokud se Vám to nelíbí, nečtěte to.
                                        </b>
                                    </p>
                                </div>
                            </div> 
                            
                            <div id="news2" style="display: block; box-sizing: inherit; padding: 8px; margin: 0 0 10px; background-color: #FFF; box-shadow: none; border: none; word-wrap: break-word; ">
                                <h4 style="color: #FFF;font-family: Arial CE, Helvetica CE ,Arial,Verdana,lucida,sans-serif;font-size: 13px;font-weight: bold;margin: -8px -8px 8px;padding: 4px 8px;text-shadow: none; background-color: #003098; border-top-right-radius: 2px; border-bottom-right-radius: 2px;">Novinky</h4>
                                <div id="announcementText" style="max-width: 100%; display: block; box-sizing: inherit;">
                                    <p>
                                        Krnáčová v boji proti terorismu. <a target="_blank" style="color: #035d8a; font-size: 13px; cursor: pointer; text-decoration: none;" href="https://www.seznamzpravy.cz/clanek/klickujici-autobus-nadavajici-popelari-praha-nesikovne-rozmistila-zabrany-proti-teroristum-43805?dop-ab-variant=&amp;seq-no=1&amp;source=hp">Zatím 
                                        se podařilo zastavit jen popeláře</a>.<br>demokracie 2.0:&nbsp;<a target="_blank" style="color: #035d8a; font-size: 13px; cursor: pointer; text-decoration: none;" href="https://navratdoreality.cz/stavkujici-deti-4214.html#">Ahoj,&nbsp;já jsem 
                                        Viki, je mi 12 a nesouhlasím se Zemanem</a>. <br><a target="_blank" style="color: #035d8a; font-size: 13px; cursor: pointer; text-decoration: none;" href="https://www.zerohedge.com/news/2018-03-13/facebook-blamed-un-investigators-spreading-hate-speech-possible-genocide">Facebook 
                                        šíří hate speech a páchá genocidu</a><br>Demokratka bojuje proti zkracování 
                                        hlavní pušek tím, že <a target="_blank" style="color: #035d8a; font-size: 13px; cursor: pointer; text-decoration: none;" href="&quot;demokratka&quot; karen mallard, chce trestat zkracovani hlavni zbrani. jak? natocenim videa, o zkraceni hlavne ar-15!">ji 
                                        sama zkrátila</a>. Další pokračování <a target="_blank" style="color: #035d8a; font-size: 13px; cursor: pointer; text-decoration: none;" href="https://www.youtube.com/watch?v=wvmlfvpbtvw">zde</a>.<br><a target="_blank" style="color: #035d8a; font-size: 13px; cursor: pointer; text-decoration: none;" href="https://www.youtube.com/watch?v=4mrnwwhafl4">Fízl v civilu si hraje na 
                                        revizora</a> (odmyslete si Oganesjana a tu jejich pojišťovnu)<br><a target="_blank" style="color: #035d8a; font-size: 13px; cursor: pointer; text-decoration: none;" href="https://www.youtube.com/watch?v=enqrm9cb6te">Prodej A-R 159 3.2 jts</a> 
                                        <br><a target="_blank" style="color: #035d8a; font-size: 13px; cursor: pointer; text-decoration: none;" href="https://www.facebook.com/autodielygafa/videos/1732308796836341/">Hlavně že 
                                        brzdy jsou ok&nbsp;</a>&nbsp;(DF)
                                    </p>
                                </div>
                            </div>
                            
                            <div style="display: block; box-sizing: inherit; background-color: #FFF; box-shadow: none; border: none; word-wrap: break-word; ">
                                <div id="newestArticleHead" style="display: block; box-sizing: inherit; padding: 8px; margin: 0 0 10px; background-color: #FFF; box-shadow: none; border: none; word-wrap: break-word; ">
                                    <h4 style="color: #FFF;font-family: Arial CE, Helvetica CE ,Arial,Verdana,lucida,sans-serif;font-size: 13px;font-weight: bold;margin: -8px -8px 8px;padding: 4px 8px;text-shadow: none; background-color: #003098; border-top-right-radius: 2px; border-bottom-right-radius: 2px;">Nejnovější články</h4>
                                </div>
                                <div id="announcementText" style="max-width: 100%; width: 100%; display: block; box-sizing: inherit;">
                                    <jdoc:include type="modules" name="box6" style="none" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php else : ?>
                <div id="content" style="display: block; overflow-y: hidden; width: auto; padding: 5px; box-sizing: border-box; height: auto; margin-top: -10px; padding-left: 15px;">  
                    <jdoc:include type="component" />
                </div>
                <?php endif; ?>
            </div>    
        </div>
        

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
