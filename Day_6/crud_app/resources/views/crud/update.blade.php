<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    

    <div class="container" >
        @if($errors->any())
            @foreach($errors->all() as $item)
                <div class="text-danger">
                    {{ $item }}
                </div>
            @endforeach
        @endif

        <!-- Content here -->
        <form action="{{ URL::route('update.record', ['id' =>  $reminder->id]) }}" method="post">
            @csrf

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input name="title" type="text" class="form-control" value="{{ $reminder->title }}" >
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" type="text" class="form-control" rows="5" >
                    {{ $reminder->description }}
                </textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Due Date</label>
                <input name="due_date" type="date" class="form-control" value="{{ $reminder->due_date }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Priority</label>
                <select  name="priority" class="form-select" aria-label="Default select example" >
                    <option disabled>Open this select menu</option>
                    <option @if($reminder->priority=="High") selected @endif > High </option>
                    <option @if($reminder->priority=="Medium") selected @endif> Medium </option>
                    <option @if($reminder->priority=="Low") selected @endif> Low </option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select  name="status" class="form-select" aria-label="Default select example" >
                    <option disabled>Open this select menu</option>
                    <option @if($reminder->status=="Pending") selected @endif> Pending </option>
                    <option @if($reminder->status=="Doing") selected @endif> Doing </option>
                    <option @if($reminder->status=="Done") selected @endif> Done </option>
                    <option @if($reminder->status=="Canceled") selected @endif> Canceled </option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>