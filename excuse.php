<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apology Generator</title>
    <link rel="stylesheet" href="file.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>


 <div class="container">
        <img class="logo" src="logo.png" alt="Logo">
        <h1>Apology Generator for School Absence</h1>
        <form action="excuse.php" method="post">
            <label for="childName">Name of the Child:</label>
        <input type="text" id="childName" name="childName" required><br><br>

        <label>Gender of the Child:</label>
        <input type="radio" id="girl" name="gender" value="girl" required>
        <label for="girl">Girl</label>
        <input type="radio" id="boy" name="gender" value="boy" required>
        <label for="boy">Boy</label><br><br>

        <label for="teacherName">Name of the Teacher:</label>
        <input type="text" id="teacherName" name="teacherName" required><br><br>

        <label for="reason">Reason for Absence:</label><br>
        <input type="radio" id="illness" name="reason" value="illness" required>
        <label for="illness">Illness</label><br>
        <input type="radio" id="petDeath" name="reason" value="petDeath" required>
        <label for="petDeath">Death of the Pet or Family Member</label><br>
        <input type="radio" id="activity" name="reason" value="activity" required>
        <label for="activity">Significant Extra-Curricular Activity</label><br>
        <input type="radio" id="other" name="reason" value="other" required>
        <label for="other">Other</label><br><br>
            <button type="submit">Generate Apology Note</button>
        </form>

        <?php
       
            // Process form submission and generate apology note here
            
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $childName = $_POST["childName"];
        $gender = $_POST["gender"];
        $teacherName = $_POST["teacherName"];
        $reason = $_POST["reason"];

        $apologyNotes = [
            "illness" => [
                "I am sorry to inform you that $childName is feeling unwell and cannot attend school today. $gender has a fever and is under the weather. We hope $gender will recover soon and be back to school tomorrow.",
                "$childName is not feeling well today and won't be able to come to school. $gender has been experiencing flu-like symptoms and needs to rest at home.",
                "I regret to inform you that $childName is sick and unable to attend school. $gender has a bad cold and is advised by the doctor to stay home and get plenty of rest.",
                "Due to illness, $childName won't be able to attend school today. $gender has a stomach ache and is not in a condition to participate in classes.",
                "$childName won't be able to come to school today due to illness. $gender has a sore throat and is advised to stay home and recover."
            ],
            "petDeath" => [
                "I am writing to let you know that $childName will not be attending school today due to the passing of our family pet. $gender is very upset and emotionally distressed, needing some time to cope with the loss.",
                "$childName won't be able to come to school today due to the sad demise of our beloved pet. $gender is feeling heartbroken and needs some time to grieve and process the loss.",
                "I regret to inform you that $childName is deeply upset because of the death of our family pet. $gender needs today to come to terms with the loss and won't be able to attend school.",
                "$childName is feeling extremely sad today because our family pet has passed away. $gender needs some time to mourn and won't be able to attend school.",
                "Due to the loss of our family pet, $childName will be absent from school today. $gender is finding it difficult to concentrate and needs a day off to deal with the emotions."
            ],
            "activity" => [
                "$childName will be absent from school today due to participation in a significant extra-curricular activity. $gender is representing the school in a regional chess tournament and won't be able to attend classes.",
                "I wanted to inform you that $childName won't be able to come to school today due to a crucial soccer match. $gender is a key player in the school team and needs to participate in the match.",
                "$childName is participating in a science competition today, representing the school. Due to this important event, $gender won't be attending regular classes.",
                "I am writing to let you know that $childName will be absent from school due to a debate competition. $gender is one of the finalists and needs to prepare for the event.",
                "$childName won't be able to attend school today as $gender is involved in a dance performance at a local event. $gender needs time for rehearsals and won't be able to attend regular classes."
            ],
            "other" => [
                "$childName will be absent from school today due to [briefly explain the reason]. We apologize for any inconvenience this may cause and appreciate your understanding. Please let us know if there are any assignments or materials $gender needs to catch up on.",
                "I regret to inform you that $childName won't be able to attend school today due to [briefly explain the reason]. $gender needs today off to deal with the situation.",
                "$childName is unable to attend school today because of [briefly explain the reason]. We appreciate your understanding in this matter and kindly request you to share any missed assignments.",
                "Due to [briefly explain the reason], $childName won't be able to come to school today. We understand the importance of regular attendance and will ensure that $gender catches up on missed lessons.",
                "$childName will be absent from school today due to [briefly explain the reason]. We assure you that $gender will make up for any missed work and appreciate your understanding in this matter."
            ]
        ];

        // Select a random apology based on the reason
        $selectedApology = $apologyNotes[$reason][array_rand($apologyNotes[$reason])];

       
    

            // Generate the current date in the specified format
            $currentDate = date("l, \t\h\e d F Y");

            // Selected apology note
            $selectedApology = "Dear $teacherName,\n\n$selectedApology\n\nSincerely,\n[Your Name]\n\n$currentDate";

            echo "<div class='apology-note'>$selectedApology</div>";
        }
    
        ?>
    </div>

</body>

</html>
