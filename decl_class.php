<?php
          if (isset($_POST['cek']))
            {
              $reqs = $_POST["kebAwal"];
              $comp = $_POST["kompleks"];
              $time = $_POST["delivery"];
              $team = $_POST["SDM"];
              $skll = $_POST["ketrampilan"];
              $clnt = $_POST["klien"];
            }
            
            class methodology {
              
              public $methPoints = 0;
              public $methName;
              public $methReqs;
              public $methComps;
              public $methTime;
              public $methTeams;
              public $methSkills;
              public $methClient;
              public $methLink; 
            }

            $inc = new methodology();
            $inc->methName = "Incremental";
            $inc->methReqs = 2;
            $inc->methComps = 1;
            $inc->methTime = 3;
            $inc->methTeams = 2;
            $inc->methSkills = 2;
            $inc->methClient = 2;
            $inc->methLink = "m_inc.php";

            $vsh = new methodology();
            $vsh->methName = "V - Shaped";
            $vsh->methReqs = 1;
            $vsh->methComps = 1;
            $vsh->methTime = 1;
            $vsh->methTeams = 1;
            $vsh->methSkills = 3;
            $vsh->methClient = 2;
            $vsh->methLink = "m_v.php";

            $spi = new methodology();
            $spi->methName = "Spiral";
            $spi->methReqs = 1;
            $spi->methComps = 2;
            $spi->methTime = 3;
            $spi->methTeams = 1;
            $spi->methSkills = 2;
            $spi->methClient = 1;
            $spi->methLink = "m_spiral.php";

            $rad = new methodology();
            $rad->methName = "Rapid Agile Development";
            $rad->methReqs = 1;
            $rad->methComps = 2;
            $rad->methTime = 2;
            $rad->methTeams = 1;
            $rad->methSkills = 1;
            $rad->methClient = 1;
            $rad->methLink = "m_rad.php";

            $pro = new methodology();
            $pro->methName = "Prototyping";
            $pro->methReqs = 2;
            $pro->methComps = 1;
            $pro->methTime = 4;
            $pro->methTeams = 1;
            $pro->methSkills = 3;
            $pro->methClient = 1;
            $pro->methLink = "m_prototype.php";

            $scr = new methodology();
            $scr->methName = "Scrum";
            $scr->methReqs = 2;
            $scr->methComps = 2;
            $scr->methTime = 1;
            $scr->methTeams = 1;
            $scr->methSkills = 2;
            $scr->methClient = 1;
            $scr->methLink = "m_scrum.php";

            $xpr = new methodology();
            $xpr->methName = "Extreme Programming";
            $xpr->methReqs = 1;
            $xpr->methComps = 3;
            $xpr->methTime = 2;
            $xpr->methTeams = 1;
            $xpr->methSkills = 1;
            $xpr->methClient = 1;
            $xpr->methLink = "m_xp.php";

            $answer = array($reqs,$comp,$time,$team,$skll,$clnt);
            $methods = array($inc,$vsh,$spi,$rad,$pro,$scr,$xpr);

          ?>