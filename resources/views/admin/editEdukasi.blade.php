<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>EI</title>
</head>
<body>

<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>Emotional Intelligence</h1>
      <hr>

      <form action="{{ route('admins.update', ['admin' => $admin]) }}" method="POST">
        @method('PATCH')
        
        @csrf

        <div class="form-group">
          <label for="selfawareness">Self Awareness</label>
          <textarea class="form-control" id="selfawareness" rows="3" style="width: 1250px"
          name="selfawareness">{{ old('selfawareness') ?? $admin ->selfawareness }}</textarea>
          
        </div>

        <div class="form-group">
            <label for="selfregulation">Self Regulation</label>
            <textarea class="form-control" id="selfregulation" rows="3" style="width: 1250px"
            name="selfregulation">{{ old('selfregulation') ?? $admin ->selfregulation }}</textarea>
          </div>
        
        <div class="form-group">
          <label for="selfmotivation">Self Motivation</label>
          <textarea class="form-control" id="selfmotivation" rows="3" style="width: 1250px"
          name="selfmotivation">{{ old('selfmotivation') ?? $admin ->selfmotivation }}</textarea>
        </div>

        <div class="form-group">
            <label for="empathy">Empathy</label>
            <textarea class="form-control" id="empathy" rows="3" style="width: 1250px"
            name="empathy">{{ old('empathy') ?? $admin ->empathy }}</textarea>
        </div>

        <div class="form-group">
          <label for="socialskills">Social Skills</label>
          <textarea class="form-control" id="socialskills" rows="3" style="width: 1250px"
          name="socialskills">{{ old('socialskills') ?? $admin ->socialskills }}</textarea>
        </div>

        <div class="form-group">
            <label for="selfadjustment">Self Adjustment</label>
            <textarea class="form-control" id="selfadjustment" rows="3" style="width: 1250px"
            name="selfadjustment">{{ old('selfadjustment') ?? $admin ->selfadjustment }}</textarea>
          </div>

        <button type="submit" class="btn btn-primary mb-2 mt-3">Update</button>
      </form>

    </div>
  </div>
</div>

</body>
</html>