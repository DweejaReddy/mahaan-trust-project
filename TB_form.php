<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="style.css">
    <title>B C C Monitoring Form Tuber Colosis (TB)</title>
</head>
<body>
    <h2>B C C Monitoring Form Tuber Colosis (TB)</h2>
    <form action="store_tb_details.php" method="post">
        <div class="mb-3">
            <label for="fname" class="form-label">Patient First Name:</label>
            <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" required>
            <label for="lname" class="form-label">Patient Last Name:</label>
            <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" required>
            <label for="age" class="form-label">Patient Age:</label>
            <input type="number" class="form-control" id="age" placeholder="Age" name="age" required>
            <label for="address" class="form-label">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Address" name="address" >
            <label for="supervisor" class="form-label">Name of Supervisor:</label>
            <input type="text" class="form-control" id="supervisor" placeholder="Supervisor" name="supervisor" >
            <label for="date" class="form-label">Date:</label>
            <input type="date" class="form-control" id="date" placeholder="Date" name="date" >
            <label for="q1">Do you know anything about Tuberculosis if yes please specify what you know
            </label>
            <textarea name="q1" id="q1" cols="160" rows="10"></textarea>

                <label for="q2">what is the reason for occurrence of tuberculosis
                </label> <br>
                <input type="radio" name="q2" value="option1">option1<br>
                <input type="radio" name="q2" value="option2">option2<br>
                <input type="radio" name="q2" value="option3">option3<br>
                <input type="radio" name="q2" value="option4">option4<br>

<br>
                <label for="q3">Through which medium does Tuberculosis spread?
                </label>
                <textarea name="q3" id="q3" cols="160" rows="10"></textarea>
                
                <label for="q4">Symptoms of Tuberculosis
                </label>
                <textarea name="q4" id="q4" cols="160" rows="10"></textarea>
                <label for="q5">After Tuberculosis the weight of the person increases is it true or false explain?
                </label>
                <textarea name="q5" id="q5" cols="160" rows="10"></textarea>
                <label for="q6">How to look for Tubuerculosis
                </label>
                <textarea name="q6" id="q6" cols="160" rows="10"></textarea>
                <label for="q7">Can tuberculosis be found with help of finding blood and puss?
                </label>
                <textarea name="q7" id="q7" cols="160" rows="10"></textarea>
                <label for="q8">How to prevent Tuberculosis?
                </label>
                <textarea name="q8" id="q8" cols="160" rows="10"></textarea>
                <label for="q9">Which vaccine is to be injected at the time of birth to prevent tuberculosis?
                </label>
                <textarea name="q9" id="q9" cols="160" rows="10"></textarea>
                <label for="q10">what is the reason for occurrence of tuberculosis
                </label> <br>
                <input type="radio" name="q10" value="option1">option1<br>
                <input type="radio" name="q10" value="option2">option2<br>
                <input type="radio" name="q10" value="option3">option3<br>
                <input type="radio" name="q10" value="option4">option4<br>
                <label for="q11">Do you know any other means to prevent Tuberculosis?
                </label>
                <textarea name="q11" id="q11" cols="160" rows="10"></textarea>

        </div>
        <button type="submit" name="submit_form" class="btn btn-primary text-center">Submit</button>
      </form>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>