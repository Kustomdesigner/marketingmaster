<div id="markmast-main-options">

  <h1>Marketing Master Settings</h1>

  <div class="switchbox checkbox-1">
    <?php $local_schema = get_option('local_schema'); ?>
    <h3>Local Business Schema</h3>
    <label class="switch">
      <input id="lb-switch" type="checkbox" name="box1" <?php if($local_schema['local_schema_settings'] == 'true') { echo "class='checked'" . "checked"; } ?>>
      <span class="slider round"></span>
      <input type="hidden" name="hidden-box-1">
    </label>
  </div>

  <div class="local-business hide-elements">

    <form method='POST'>
      <label for="Business Name" class="b-label">Business Name*
        <input class="input-block" type="text" name="local-business-name" value="<?php echo $local_schema['local_schema_fld1']; ?>" required>
      </label>

      <label for="Business Image" class="b-label">Business Img*
        <input class="input-block" type="text" name="local-business-img" value="<?php echo $local_schema['local_schema_fld2']; ?>" required>
      </label>

      <label for="Business Phone"  class="b-label">Business Phone*
        <input class="input-block" type="text" name="local-business-phone" value="<?php echo $local_schema['local_schema_fld3']; ?>" required>
      </label>

      <label for="Business Logo" class="b-label">Business Logo*
        <input class="input-block" type="text" name="local-business-logo" value="<?php echo $local_schema['local_schema_fld4']; ?>" required>
      </label>

      <label for="Business Desription" class="b-label">Business Description*
        <input class="input-block" type="text" name="local-business-description" value="<?php echo $local_schema['local_schema_fld5']; ?>" required>
      </label>

      <label for="Business Hours" class="b-label">Business Hours* <span class="openhours-example">(default: Su,Mo,Tu,We,Th,Fr,Sa 00:00-24:00)</span>
        <input class="input-block" type="text" name="local-business-hours" value="Su,Mo,Tu,We,Th,Fr,Sa 00:00-24:00" required>
      </label>

      <h3>Business Address</h3>
      <label for="Business " class="b-label">Business Street*
        <input class="input-block" type="text" name="local-business-street-address" value="<?php echo $local_schema['local_schema_fld2']; ?>" required>
      </label>

      <label for="Business City" class="b-label">Business City*
        <input class="input-block" type="text" name="local-business-city" value="<?php echo $local_schema['local_schema_fld2']; ?>" required>
      </label>

      <label for="Business State" class="b-label">Business State*
        <input class="input-block" type="text" name="local-business-state" value="<?php echo $local_schema['local_schema_fld2']; ?>" required>
      </label>

      <label for="Business Zip" class="b-label">Business Zip*
        <input class="input-block" type="text" name="local-business-zip" value="<?php echo $local_schema['local_schema_fld2']; ?>" required>
      </label>  

      <input id="submit-btn" type="submit" name="submit_btn" value="Save Local Schema">
    </form>
  </div>


  <div class="switchbox checkbox-2">
  <h3>Product Review</h3>
    <label class="switch">
      <input id="pr-switch" type="checkbox" name="box2">
      <span class="slider round"></span>
    </label>
  </div>

  <div class="product-review hide-elements">
    <form action="">
      <label for="Product Name" class="b-label">Product Name
        <input class="input-block" type="text" name="" required>
      </label>
    </form>
  </div>

  <div class="switchbox checkbox-3">
    <label class="switch">
      <input type="checkbox" name="box3">
      <span class="slider round"></span>
    </label>
  </div>
</div>

<?php
/*
*  Process Local Schema Form
*/ 
  if($_POST['submit_btn']) {
    if(get_option('local_schema')) {
      $local_schema = array(
        'local_schema_settings' => 'true',
        'local_schema_fld1' => $_POST['local-business-name'],
        'local_schema_fld2' => $_POST['local-business-img'],
        'local_schema_fld3' => $_POST['local-business-phone'],
        'local_schema_fld4' => $_POST['local-business-logo'],
        'local_schema_fld5' => $_POST['local-business-description'],
        'local_schema_fld6' => $_POST['local-business-hours'],
        'local_schema_fld7' => $_POST['local-business-street-address'],
        'local_schema_fld8' => $_POST['local-business-city'],
        'local_schema_fld9' => $_POST['local-business-state'],
        'local_schema_fld10' => $_POST['local-business-zip']
      );
      update_option('local_schema', $local_schema);

    } else {
      $local_schema = array(
        'local_schema_settings' => 'true',
        'local_schema_fld1' => $_POST['local-business-name'],
        'local_schema_fld2' => $_POST['local-business-img'],
        'local_schema_fld3' => $_POST['local-business-phone'],
        'local_schema_fld4' => $_POST['local-business-logo'],
        'local_schema_fld5' => $_POST['local-business-description'],
        'local_schema_fld6' => $_POST['local-business-hours'],
        'local_schema_fld7' => $_POST['local-business-street-address'],
        'local_schema_fld8' => $_POST['local-business-city'],
        'local_schema_fld9' => $_POST['local-business-state'],
        'local_schema_fld10' => $_POST['local-business-zip']
      );
      add_option('local_schema', $local_schema);
    }


  } else {
  
  }
?>


 


