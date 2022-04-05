 <h1> Step 4. Uploading Supplementary Files </h1>
 <p> 1. START 2. UPLOAD SUBMISSION 3. ENTER METADATA <b>4. UPLOAD SUPPLEMENTARY FILES</b> 5. CONFIRMATION </p>
 <p> This optional step allows Supplementary Files to be added to a submission. The files, which can be in any format, might include (a) research instruments, (b) data sets, which comply with the terms of the study's research ethics review, (c) sources that otherwise would be unavailable to readers, (d) figures and tables that cannot be integrated to the text itself, or other materials that add to the contribution of the work. </p>
  <form method="post" action="<?php echo base_url('FileUpload/uploadsupplement');?>" enctype="multipart/form-data">
  Upload supplementary file
  <input type="file" name="file" id="file">
  <input type="submit" value="Upload" name="submit">
</form>
 <br> <input type="submit" value="Save and Continue"> <input type="submit" value="Cancel">