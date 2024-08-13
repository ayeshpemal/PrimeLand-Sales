<?php
    include ("NavigationBar.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="../CSS/Advertisement.css">
</head>

<body>
    
    <div class="form-container">
        <form>
            <div class="form-group">
                <label class="input-label">Owner Name:</label>
                <input type="text" class="input-field">
            </div>

            <div class="form-group form-grid">
                <div>
                    <label class="input-label">Telephone Number:</label>
                    <input type="text" class="input-field">
                </div>
                <div>
                    <label class="input-label">WhatsApp:</label>
                    <input type="text" class="input-field">
                </div>
            </div>

            <div class="form-group form-grid">
                <div>
                    <label class="input-label">Province:</label>
                    <input type="text" class="input-field">
                </div>
                <div>
                    <label class="input-label">District:</label>
                    <input type="text" class="input-field">
                </div>
            </div>

            <div class="form-group">
                <label class="input-label">Size of Land:</label>
                <input type="text" class="input-field">
                <select name="Unit" id="dropdown1" class="input-field">
                    <option value="Unit">Unit</option>
                    <option value="Acres">Acres</option>
                    <option value="Perches">Perches</option>
                    <option value="Hectare">Hectare</option>
                </select>
            </div>

            <div class="form-group">
                <label class="input-label">Prize of Land:</label>
                <input type="text" class="input-field">
            </div>

            <div class="form-group">
                <label class="input-label">Type of Land:</label>
                <select id="dropdown2" class="input-field">
                    <option value="Type">Type</option>
                    <option value="Urban">Urban</option>
                    <option value="Rural">Rural</option>
                </select>
                <select name="Sub Type" id="dropdown1" class="input-field">
                    <option value="Sub Type">Sub Type</option>
                    <option value="Agriculture Lands">Agriculture Lands</option>
                    <option value="Commercial Lands">Commercial Lands</option>
                    <option value="Residential Lands">Residential Lands</option>
                </select>
            </div>

            <div class="form-group">
                <label class="input-label">Additional Description:</label>
                <textarea></textarea>
            </div>

            <div class="form-group form-grid">
                <button name="clear" value="Clear" id="clear" class="submit-btn">Clear</button>
                <button name="submit" value="Submit" type="submit" id="submit" class="submit-btn">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>
