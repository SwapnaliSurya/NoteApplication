<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note Taking App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("D:\Xampp\htdocs\JS_revision\task1\image\notes.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .note-container {
            width: 350px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .note-title-box {
            background-color: #007BFF;
            color: #fff;
            border-radius: 5px;
            padding: 5px 10px;
            text-align: center;
        }

        .note-title {
            font-size: 20px;
            font-weight: bold;
            margin: 0;
        }

        .note-description {
            margin-top: 10px;
        }

        .note-description textarea {
            width: 100%;
            height: 150px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            resize: none;
        }

        .color-picker {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .color-picker label {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
        }

        .color-picker input[type="radio"] {
            display: none;
        }

        .color-picker label:hover {
            transform: scale(1.1);
        }

        .color-picker .color1 {
            background-color: #f7df1e;
        }

        .color-picker .color2 {
            background-color: #f06292;
        }

        .color-picker .color3 {
            background-color: #4caf50;
        }

        .create-note-button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            margin-top: 10px;
        }

        .notes-list {
            margin-top: 20px;
        }

        .note {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .note-title-text {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="note-container">
    <div class="note-title-box">
        <h1 class="note-title">Notes</h1>
    </div>

    <div class="mb-3">
        <label for="title" class="form-label" style="margin-top:20px;">Title</label>
        <input type="title" id="title" name="title" class="form-control">
    </div>

    <div class="mb-3">
        <label for="Description" class="form-label">Description</label>
        <textarea id="noteDescription" placeholder="Description" class="form-control"></textarea>
    </div>

    <div class="note-description">
        <label for="note-color" class="form-label">Select Note Color</label>
        <div class="color-picker">
            <label class="color1"><input type="radio" name="color" value="#f7df1e"></label>
            <label class="color2"><input type="radio" name="color" value="#f06292"></label>
            <label class="color3"><input type="radio" name="color" value="#4caf50"></label>
        </div>
        <button class="create-note-button" onclick="createNote()">Create Note</button>
    </div>
    <div class="notes-list" id="notesList">
    </div>
</div>

<script>
    function createNote() {
        const title = document.getElementById('title').value;
        const description = document.getElementById('noteDescription').value;
        const color = document.querySelector('input[name="color"]:checked')?.value;

        if (title && description && color) {
            const notesList = document.getElementById('notesList');
            const noteDiv = document.createElement('div');
            noteDiv.classList.add('note');
            noteDiv.style.backgroundColor = color;

            const noteTitle = document.createElement('p');
            noteTitle.classList.add('note-title-text');
            noteTitle.innerText = title;

            const noteDesc = document.createElement('p');
            noteDesc.innerText = description;

            noteDiv.appendChild(noteTitle);
            noteDiv.appendChild(noteDesc);
            notesList.appendChild(noteDiv);

            document.getElementById('title').value = '';
            document.getElementById('noteDescription').value = '';
        }
    }
</script>
</body>
</html>
