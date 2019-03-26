<?php

    $quotes = array();
    
    $quotes[0] = array();
    $quotes[0]["quote"] = "Be who you are and say what you feel, because those who mind don't matter, and those who matter don't mind.";
    $quotes[0]["author"] = "- Dr. Seuss";

    $quotes[1] = array();
    $quotes[1]["quote"] = "I will love the light for it shows me the way, yet I will endure the darkness for it shows me the stars.";
    $quotes[1]["author"] = "- Og Mandino";
    
    $quotes[2] = array();
    $quotes[2]["quote"] = "Your present circumstances don't determine where you can go; they merely determine where you start.";
    $quotes[2]["author"] = "- Nido Qubein";
    
    $quotes[3] = array();
    $quotes[3]["quote"] = "You miss 100% of the shots you don't take.";
    $quotes[3]["author"] = "- Wayne Gretzky";
    
    $quotes[4] = array();
    $quotes[4]["quote"] = "Creativity is intelligence having fun.";
    $quotes[4]["author"] = "- Albert Einstein";
    
    $quotes[5] = array();
    $quotes[5]["quote"] = "Whether you think you can or you think you can't, you're right.";
    $quotes[5]["author"] = "- Henry Ford";
    
    $quotes[6] = array();
    $quotes[6]["quote"] = "If you are not willing to risk the unusual, you will have to settle for the ordinary.";
    $quotes[6]["author"] = "- Jim Rohn";
    
    $quotes[7] = array();
    $quotes[7]["quote"] = "Success is walking from failure to failure with no loss of enthusiasm. ";
    $quotes[7]["author"] = "- Winston Churchill";
    
    $quotes[8] = array();
    $quotes[8]["quote"] = "Try not to become a person of success, but rather try to become a person of value.";
    $quotes[8]["author"] = "- Albert Einstein";
    
    $quotes[9] = array();
    $quotes[9]["quote"] = "I am not a product of my circumstances. I am a product of my decisions.";
    $quotes[9]["author"] = "- Stephen Covey";
    
    $quotes[10] = array();
    $quotes[10]["quote"] = "Don't judge each day by the harvest you reap but by the seeds that you plant.";
    $quotes[10]["author"] = "- Robert Louis Stevenson";
    
    $quotes[11] = array();
    $quotes[11]["quote"] = "What would you attempt to do if you knew you would not fail?";
    $quotes[11]["author"] = "- Robert Schuller";
    
    $quotes[12] = array();
    $quotes[12]["quote"] = "You may have to fight a battle more than once to win it.";
    $quotes[12]["author"] = "- Margaret Thatcher";
    
    $quotes[13] = array();
    $quotes[13]["quote"] = "Focus on the journey, not the destination. Joy is found not in finishing an activity but in doing it.";
    $quotes[13]["author"] = "- Greg Anderson";
    
    $quotes[14] = array();
    $quotes[14]["quote"] = "A person who never made a mistake never tried anything new.";
    $quotes[14]["author"] = "- Albert Einstein";
    
    
    echo json_encode($quotes[rand(0, 14)]);
?>