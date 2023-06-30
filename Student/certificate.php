<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="certificate.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Certificate</title>
  </head>
  <body>
    <div class="container-full">
      <div class="container-report">
        <div class="report-head">Report Card</div>
        <div class="name-class">
          <div class="name" id="name">Name :</div>
          <div class="class" id="class">Class :</div>
        </div>

        <table class="table table-striped table-bordered w-75">
          <thead>
            <tr>
              <th>Subject</th>
              <th>Partial 1</th>
              <th>Mid-Exam</th>
              <th>Average 1</th>
              <th>Partial 2</th>
              <th>Final-Exam</th>
              <th>Total Average</th>
            </tr>
            <tbody>
            <tr><td>English</td></tr>
            <tr><td>Arabic</td></tr>
            <tr><td>Math</td></tr>
            <tr><td>Science</td></tr>
            <tr><td>History</td></tr>
            <tr><td>Sports</td></tr>
          </tbody>
          </thead>
        </table>
        
        <div class="foot">
          <div class="scale">GRADING SCALE: A -> 90%-100% | B -> 80%-89% | C -> 60%-79% | D -> 0%-59%</div>
          <div class="white-foot" id="comment">Comment:</div>
        </div>
        <button class="print" onclick="window.print();return false;" >Print</button>
      </div>
    </div>
  </body>
</html>
