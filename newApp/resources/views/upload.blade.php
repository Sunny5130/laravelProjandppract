<div>
    <h1>Upload file</h1>
    <form action="upload" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="file" name="file" id="file">
      <button type="submit">Upload file</button>
    </form>
  </div>
  
