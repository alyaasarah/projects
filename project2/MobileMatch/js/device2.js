// Load the device details from the JSON file
fetch('json/device.json')
  .then(response => response.json())
  .then(data => {

    // Find the details of Xiaomi 11 Lite 5G NE
    const device = data.find(device => device.deviceId === 'SGA54');

    // Create a table element
    const table = document.createElement('table');

    // Create a table row for the headings
    const headingsRow = document.createElement('tr');
    const headings = ['Features', 'Descriptions'];
    headings.forEach(headingText => {
      const th = document.createElement('th');
      th.textContent = headingText;
      headingsRow.appendChild(th);
    });
    table.appendChild(headingsRow);

    // Create a table row for each feature
    const features = [
      'Device Brand', 'Device Name', 'Release Date', 'Operating System', 
      'RAM', 'Memory Size', 'CPU', 'Battery Size', 'Dimension', 'Weight', 
      'Colours', 'Connector Type', 'Audio', 'Sound Jack'
    ];
    features.forEach(featureText => {
      const row = document.createElement('tr');

      // Create a cell for the feature name
      const featureCell = document.createElement('td');
      featureCell.textContent = featureText;
      row.appendChild(featureCell);

      // Create a cell for the device details
      const descriptionCell = document.createElement('td');
      descriptionCell.textContent = device[featureText.toLowerCase()] || 'N/A';
      row.appendChild(descriptionCell);

      // Add the row to the table
      table.appendChild(row);
    });

    // Add the table to the HTML page
    document.querySelector('.device-specification').appendChild(table);
  });
