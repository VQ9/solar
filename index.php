<!DOCTYPE html>
<html lang="en">

<!-- PHP CODE -->
<?php
session_start();
$questions = array(
    array(
        'type' => 'radio',
        'bootstrap' => 'form-check-input',
        'question' => 'What type of house do you live in?',
        'answers' => array(
            'House',
            'Apartment',
            'Caravan'
        )
    ),
    array(
        'type' => 'text',
        'bootstrap' => '',
        'question' => 'What county do you live in?',
        'answers' => array(
            'Avon',
            'Bedfordshire',
            'Berkshire',
            'Buckinghamshire',
            'Cambridgeshire',
            'Cheshire',
            'Cornwall',
            'Cumbria',
            'Derbyshire',
            'Devon',
            'Dorset',
            'Durham',
            'Essex',
            'Gloucestershire',
            'Greater London',
            'Hampshire',
            'Herefordshire',
            'Hertfordshire',
            'Isle of Wight',
            'Kent',
            'Lancashire',
            'Leicestershire',
            'Lincolnshire',
            'Merseyside',
            'Norfolk',
            'Northamptonshire',
            'Northumberland',
            'Nottinghamshire',
            'Oxfordshire',
            'Rutland',
            'Shropshire',
            'Somerset',
            'Straffordshire',
            'Suffolk',
            'Surrey',
            'Susssex',
            'Tyne and Wear',
            'Warwickshire',
            'West Midlands',
            'Wiltshire',
            'Worcestershire',
            'Yorkshire'
        )
    ),
    array(
        'type' => 'number',
        'bootstrap' => '',
        'question' => 'How long do you intend to stay in your house?',
        'answers' => array('')
    ),
    array(
        'type' => 'radio',
        'bootstrap' => 'form-check-input',
        'question' => 'Is your house suitable for solar panels?',
        'answers' => array(
            'Yes',
            'No'
        )
    ),
    array(
        'type' => 'radio',
        'bootstrap' => 'form-check-input',
        'question' => 'Is your roof in good condition?',
        'answers' => array(
            'Yes',
            'No'
        )
    ),
    array(
        'type' => 'radio',
        'bootstrap' => 'form-check-input',
        'question' => 'Do you own your home or are you renting?',
        'answers' => array(
            'I own my home',
            'I am renting my home'
        )
    ),
    array(
        'type' => 'radio',
        'bootstrap' => 'form-check-input',
        'question' => 'Are you interested in solar panels?',
        'answers' => array(
            'Yes',
            'No'
        )
    ),
    array(
        'type' => 'radio',
        'bootstrap' => 'form-check-input',
        'question' => 'What type of solar panels are you interested in? (<a href="information.php" target="_blank">more info</a>)',
        'answers' => array(
            'Monocrystalline Solar Panels (Mono-SI)',
            'Polycrystalline Solar Panels (p-Si)',
            'Thin-Film (TFSC) / Amorphous Silicon Solar Panels (A-SI)',
            'Concentrated PV Cell (CVP)'
        )
    ),
    array(
        'type' => 'radio',
        'bootstrap' => 'form-check-input',
        'question' => 'Are you interested in a battery system? (<a href="information.php" target="_blank">more info</a>)',
        'answers' => array(
            'Yes',
            'No'
        )
    ),
    array(
        'type' => 'radio',
        'bootstrap' => 'form-check-input',
        'question' => 'Do electricians have access to your fuse board/consumer unit?',
        'answers' => array(
            'Yes',
            'No'
        )
    ),
    array(
        'type' => 'radio',
        'bootstrap' => 'form-check-input',
        'question' => 'Do you have the space for the inverter and batteries?',
        'answers' => array(
            'Yes',
            'No'
        )
    ),
    array(
        'type' => 'radio',
        'bootstrap' => 'form-check-input',
        'question' => 'Why do you want solar panels?',
        'answers' => array(
            'For the environment',
            'Economic reasons'
        )
    ),
    
);

$counties = array(
    'Avon' => array(
        array (
            'name' => 'Solarsense',
            'link' => 'https://www.solarsense-uk.com/'
        ),
        array (
            'name' => 'IDDEA',
            'link' => 'https://www.iddea.co.uk/'
        )
    ),
    'Bedfordshire' => array(
        array (
            'name' => 'Cambridge Solar',
            'link' => 'https://www.cambridge-solar.co.uk/'
        ),
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        )
    ),
    'Berkshire' => array(
        array (
            'name' => 'Cambridge Solar',
            'link' => 'https://www.cambridge-solar.co.uk/'
        ),
        array (
            'name' => 'Spirit Energy',
            'link' => 'https://www.spiritenergy.co.uk/'
        )
    ),
    'Buckinghamshire' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'Spirit Energy',
            'link' => 'https://www.spiritenergy.co.uk/'
        )
    ),
    'Cambridgeshire' => array(
        array (
            'name' => 'Cambridge Solar',
            'link' => 'https://www.cambridge-solar.co.uk/'
        ),
        array (
            'name' => 'Green Energy Electrical',
            'link' => 'https://www.greenenergyelectrical.com/'
        )
    ),
    'Cheshire' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'EvoEnergy',
            'link' => 'https://www.evoenergy.co.uk/'
        )
    ),
    'Cornwall' => array(
        array (
            'name' => 'Naked Solar',
            'link' => 'https://nakedsolar.co.uk/'
        ),
        array (
            'name' => 'Sungift Solar',
            'link' => 'https://www.sungiftsolar.co.uk/'
        )
    ),
    'Cumbria' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'EvoEnergy',
            'link' => 'https://www.evoenergy.co.uk/'
        )
    ),
    'Derbyshire' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'EvoEnergy',
            'link' => 'https://www.evoenergy.co.uk/'
        )
    ),
    'Devon' => array(
        array (
            'name' => 'Sungift Solar',
            'link' => 'https://www.sungiftsolar.co.uk/'
        ),
        array (
            'name' => 'Naked Solar',
            'link' => 'https://nakedsolar.co.uk/'
        )
    ),
    'Dorset' => array(
        array (
            'name' => 'IDDEA',
            'link' => 'https://www.iddea.co.uk/'
        ),
        array (
            'name' => 'Infinity Energy Services',
            'link' => 'https://www.infinity-energy.co.uk/'
        )
    ),
    'Durham' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'EvoEnergy',
            'link' => 'https://www.evoenergy.co.uk/'
        )
    ),
    'Essex' => array(
        array (
            'name' => 'Green Energy Electrical',
            'link' => 'https://www.greenenergyelectrical.com/'
        ),
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        )
    ),
    'Gloucestershire' => array(
        array (
            'name' => 'MyPower',
            'link' => 'https://www.mypoweruk.com/'
        ),
        array (
            'name' => 'Eco2Solar',
            'link' => 'https://www.eco2solar.co.uk/'
        )
    ),
    'Greater London' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'Green Energy Electrical',
            'link' => 'https://www.greenenergyelectrical.com/'
        )
    ),
    'Hampshire' => array(
        array (
            'name' => 'Empower Energy',
            'link' => 'https://www.empowerenergy.co.uk/'
        ),
        array (
            'name' => 'Infinity Energy Services',
            'link' => 'https://www.infinity-energy.co.uk/'
        )
    ),
    'Herefordshire' => array(
        array (
            'name' => 'Eco2Solar',
            'link' => 'https://www.eco2solar.co.uk/'
        ),
        array (
            'name' => 'MyPower',
            'link' => 'https://www.mypoweruk.com/'
        )
    ),
    'Hertfordshire' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'Green Energy Electrical',
            'link' => 'https://www.greenenergyelectrical.com/'
        )
    ),
    'Isle of Wight' => array(
        array (
            'name' => 'Infinity Energy Services',
            'link' => 'https://www.infinity-energy.co.uk/'
        ),
        array (
            'name' => 'Empower Energy',
            'link' => 'https://www.empowerenergy.co.uk/'
        )
    ),
    'Kent' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'Green Energy Electrical',
            'link' => 'https://www.greenenergyelectrical.com/'
        )
    ),
    'Lancashire' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'EvoEnergy',
            'link' => 'https://www.evoenergy.co.uk/'
        )
    ),
    'Leciestershire' => array(
        array (
            'name' => 'EvoEnergy',
            'link' => 'https://www.evoenergy.co.uk/'
        ),
        array (
            'name' => 'The Solar Electrician',
            'link' => 'https://thesolarelectrician.co.uk/'
        )
    ),
    'Lincolnshire' => array(
        array (
            'name' => 'EvoEnergy',
            'link' => 'https://www.evoenergy.co.uk/'
        ),
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        )
    ),
    'Merseyside' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'EvoEnergy',
            'link' => 'https://www.evoenergy.co.uk/'
        )
    ),
    'Norfolk' => array(
        array (
            'name' => 'Cambridge Solar',
            'link' => 'https://www.cambridge-solar.co.uk/'
        ),
        array (
            'name' => 'East Green Energy',
            'link' => 'https://www.eastgreenenergy.co.uk/'
        )
    ),
    'Northamptonshire' => array(
        array (
            'name' => 'Cambridge Solar',
            'link' => 'https://www.cambridge-solar.co.uk/'
        ),
        array (
            'name' => 'The Solar Electrician',
            'link' => 'https://thesolarelectrician.co.uk/'
        )
    ),
    'Northumberland' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'EvoEnergy',
            'link' => 'https://www.evoenergy.co.uk/'
        )
    ),
    'Nottinghamshire' => array(
        array (
            'name' => 'EvoEnergy',
            'link' => 'https://www.evoenergy.co.uk/'
        ),
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        )
    ),
    'Oxfordshire' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'The Solar Electrician',
            'link' => 'https://thesolarelectrician.co.uk/'
        )
    ),
    'Rutland' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'Cambridge Solar',
            'link' => 'https://www.cambridge-solar.co.uk/'
        )
    ),
    'Shropshire' => array(
        array (
            'name' => 'The Solar Electrician',
            'link' => 'https://thesolarelectrician.co.uk/'
        ),
        array (
            'name' => 'Eco2Solar',
            'link' => 'https://www.eco2solar.co.uk/'
        )
    ),
    'Somerset' => array(
        array (
            'name' => 'SolarSense',
            'link' => 'https://www.solarsense-uk.com/'
        ),
        array (
            'name' => 'IDDEA',
            'link' => 'https://www.iddea.co.uk/'
        )
    ),
    'Staffordshire' => array(
        array (
            'name' => 'The Solar Electrician',
            'link' => 'https://thesolarelectrician.co.uk/'
        ),
        array (
            'name' => 'EvoEnergy',
            'link' => 'https://www.evoenergy.co.uk/'
        )
    ),
    'Suffolk' => array(
        array (
            'name' => 'East Green Energy',
            'link' => 'https://www.eastgreenenergy.co.uk/'
        ),
        array (
            'name' => 'Cambridge Solar',
            'link' => 'https://www.cambridge-solar.co.uk/'
        )
    ),
    'Surrey' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'Spirit Energy',
            'link' => 'https://www.spiritenergy.co.uk/'
        )
    ),
    'Sussex' => array(
        array (
            'name' => 'Empower Energy',
            'link' => 'https://www.empowerenergy.co.uk/'
        ),
        array (
            'name' => 'Infinity Energy Services',
            'link' => 'https://www.infinity-energy.co.uk/'
        )
    ),
    'Tyne and Wear' => array(
        array (
            'name' => 'Joju Energy',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'EvoEnergy',
            'link' => 'https://www.evoenergy.co.uk/'
        )
    ),
    'Warwickshire' => array(
        array (
            'name' => 'The Solar Electrician',
            'link' => 'https://thesolarelectrician.co.uk/'
        ),
        array (
            'name' => 'Eco2Solar',
            'link' => 'https://www.eco2solar.co.uk/'
        )
    ),
    'West Midlands' => array(
        array (
            'name' => 'The Solar Electrician',
            'link' => 'https://thesolarelectrician.co.uk/'
        ),
        array (
            'name' => 'Eco2Solar',
            'link' => 'https://www.eco2solar.co.uk/'
        )
    ),
    'Wiltshire' => array(
        array (
            'name' => 'IDDEA',
            'link' => 'https://www.iddea.co.uk/'
        ),
        array (
            'name' => 'Empower Energy',
            'link' => 'https://www.empowerenergy.co.uk/'
        )
    ),
    'Worcestershire' => array(
        array (
            'name' => 'Eco2Solar',
            'link' => 'https://www.eco2solar.co.uk/'
        ),
        array (
            'name' => 'MyPower',
            'link' => 'https://www.mypoweruk.com/'
        )
    ),
    'Yorkshire' => array(
        array (
            'name' => 'Joju Solar',
            'link' => 'https://www.jojusolar.co.uk/'
        ),
        array (
            'name' => 'EvoEnergy',
            'link' => 'https://www.evoenergy.co.uk/'
        )
    )
);

if (isset($_POST['submit'])) {
    $question_number = (int) $_POST['question_number'];
    if (isset($_POST['answer']) and !(empty($_POST['answer']))) {
        $answer = $_POST['answer'];
        $_SESSION['user_responses'][$question_number] = $answer;
        $_SESSION['valid'] = True;
        
        if ($question_number == '6' and $answer == 'No') {
            $question_number = 9;
        }
        elseif ($question_number == '9' and $answer == 'No') {
            $question_number = 12;
        }
        else {
            $question_number++;
        }
        
        if ($question_number < count($questions)) {
            header('Location: ' . $_SERVER['PHP_SELF'] . '?q=' . $question_number);
        } 
        else {
        }
        exit();
    }
    else {
        $_SESSION['valid'] = False;
        header('Location: ' . $_SERVER['PHP_SELF'] . '?q=' . $question_number);
        exit();
    }
}

if (isset($_GET['q'])) {
    $question_number = (int) $_GET['q'];
} else {
    $question_number = 0;
}

if (!(isset($_SESSION['valid']))) {
    $_SESSION['valid'] = True;
}

$question = $questions[$question_number];
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Products - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Stats-icons.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md sticky-top py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bookshelf">
                        <path d="M2.5 0a.5.5 0 0 1 .5.5V2h10V.5a.5.5 0 0 1 1 0v15a.5.5 0 0 1-1 0V15H3v.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zM3 14h10v-3H3v3zm0-4h10V7H3v3zm0-4h10V3H3v3z"></path>
                    </svg></span><span>InfoSolar</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Calculator</a></li>
                    <li class="nav-item"><a class="nav-link" href="concept.php">Concept</a></li>
                    <li class="nav-item"><a class="nav-link" href="information.php">Information</a></li>
                </ul><a class="btn btn-primary shadow" role="button" href="index.php">Magic</a>
            </div>
        </div>
    </nav>
    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-xxl-12">
                    <h2 class="fw-bold text-center" style="text-align: center;">Calculator</h2>
                </div>
            </div>
            <div class="parent container d-flex h-100">
                <div class="child"> 
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    
                    <br><br>
                    
                
                    <h4 class="fw-bold text-center"><?php echo $question['question']; ?></h4>
                    <p class="text-muted">
                        <input type="hidden" name="question_number" value="<?php echo $question_number; ?>">
                    </p>
                    <?php if ($question_number != 1):?>
                        <?php foreach ($question['answers'] as $answer): ?>
                            <label>
                                <input class="<?php echo $bootstrap;?>" type="<?php echo $question['type']; ?>" name="answer" value="<?php echo $answer; ?>">
                                <?php echo $answer; ?>
                            </label>
                            <br>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <select name="answer">
                            <?php foreach ($question['answers'] as $answer): ?>
                                <option value="<?php echo $answer; ?>"><?php echo $answer; ?></option>
                            <?php endforeach; ?>
                        </select>
                    <?php endif; ?>
                    <br><br>
                    <?php if ($question_number == 11): ?>
                        <button type="button" data-toggle="modal" data-target="#modal-1" class="btn btn-primary">Finish</button>
                    <?php else: ?>
                        <input class="btn btn-primary" type="submit" name="submit" value="Next">
                    <?php endif; ?>
                    </form>
                </div>
            </div>
            <br><br><br>
            <!-- MODAL -->
            <div class="modal fade" id="modal-1" role="dialog" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" style="color: var(--bs-black);">Cost</h4><button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p style="color: var(--bs-black);">
                            The rough cost of your setup as it is currently will cost roughly <?php $cost; ?> <br>
                            The following companies offer services in your area,
                            <?php foreach ($companies as $company): ?>
                                <p style="color: var(--bs-black);"><span style="color: var(--bs-blue);"><b><?php echo $company['name']; ?></b></span> found <a href="<?php echo $company['link']; ?>" target='_blank'>here</a> </p>
                            <?php endforeach; ?>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL -->
            <!-- HELPING MODAL -->
            <div class="modal fade" id="helpingModal" role="dialog" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" style="color: var(--bs-black);">Information</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p id="modal-message" style="color: var(--bs-black);">
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL -->
            <img class="rounded img-fluid shadow w-100 fit-cover" src="assets/img/products/1.jpg" style="height: 500px;">
        </div>
        <section class="py-5"></section>
    </section>
    <footer class="bg-dark">
        <div class="container py-4 py-lg-5">
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Designed for Raspberry PI competition 2023</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right-short">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right-short">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right-short">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                        </svg></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-dark.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
    $('input[type=radio][name=answer]').change(function() {
        var selected = $(this).val();
        
        if (selected == "Apartment") {
            var modal = document.getElementById("helpingModal");
            var message = "You will need to consult your Landlord to see if this is possible.";
            modal.setAttribute('data-message', message);

            var modalMessage = modal.querySelector('#modal-message');
            modalMessage.innerHTML = message;

            $('#helpingModal').modal('show');
        }
        else if (selected == "Caravan") {
            var modal = document.getElementById("helpingModal");
            var message = "You can't install solar panels.";
            modal.setAttribute('data-message', message);

            var modalMessage = modal.querySelector('#modal-message');
            modalMessage.innerHTML = message;

            $('#helpingModal').modal('show');
        }
    });
    </script>

</body>



</html>