$(document).ready(function () {
  $('.radio').each(function () {
    $(this).click(function () {
      $(this).closest('.time').find('.radio').removeClass('checked');
      $(this).addClass('checked');
    });
  });

  $('.modal').click(function () {
    $(this).toggle();
  });

  $('.modal-init').click(function () {
    alert('test');
    $('.modal').css('display', 'block');
  });

  $('#maps_url').change(function () {
    $('#maps_iframe').attr('src', $(this).val());
  });

  setTimeout(function () {
    $("#message").fadeOut(1000);
  }, 3000);
});

const fileInput = document.getElementById('fileInput');
const imageContainer = document.getElementById('image-container');

// Function to display images
function displayImages(files) {
  // Iterate over each file and create an image element
  for (let file of files) {
    const reader = new FileReader();
    reader.onload = function (event) {
      // Create an image item container
      const imageItem = document.createElement('div');
      imageItem.classList.add('image-item');

      // Create an image element
      const img = document.createElement('img');
      img.src = event.target.result;

      // Create a remove button
      const removeBtn = document.createElement('button');
      removeBtn.textContent = 'X';
      removeBtn.classList.add('remove-btn');
      removeBtn.onclick = function () {
        removeImage(imageItem, file);
      };

      // Append the image and remove button to the image item container
      imageItem.appendChild(img);
      imageItem.appendChild(removeBtn);

      // Append the image item to the image container
      imageContainer.appendChild(imageItem);
    };
    reader.readAsDataURL(file);
  }
}

// Remove an image from the container and the input field
function removeImage(imageItem, fileToRemove) {
  // Remove the image item from the DOM
  imageItem.remove();

  // Remove the file from the input field (we need to update the file input manually)
  const files = Array.from(fileInput.files);
  const newFiles = files.filter(file => file !== fileToRemove);
  fileInput.files = new FileListItems(newFiles);
}

// Event listener for file input changes
if (fileInput) {
  fileInput.addEventListener('change', function (event) {
    const files = event.target.files;
    if (files.length) {
      displayImages(files);
    }
  });
}

// Utility to create a new FileList from an array of files (needed to update file input)
function FileListItems(files) {
  const dataTransfer = new DataTransfer();
  files.forEach(file => dataTransfer.items.add(file));
  return dataTransfer.files;
}

// JavaScript
document.getElementById('img_upload').addEventListener('change', function (event) {
  const file = event.target.files[0]; // Get the selected file
  const preview = document.getElementById('img_preview'); // Get the img element

  if (file) {
    const reader = new FileReader(); // Create a FileReader instance
    reader.onload = function (e) {
      preview.src = e.target.result; // Set the img src to the file's data URL
    };
    reader.readAsDataURL(file); // Read the file as a data URL
  } else {

  }
});