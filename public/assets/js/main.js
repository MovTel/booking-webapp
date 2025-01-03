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

  $('#show-calendar, .modal-booking').click(function () {
    $('.modal-booking').toggleClass('active');
    $('.calendar-wrap').toggleClass('active');
  });
});

const fileInput = document.getElementById('fileInput');
const imageContainer = document.getElementById('image-container');

function displayImages(files) {
  for (let file of files) {
    const reader = new FileReader();
    reader.onload = function (event) {

      const imageItem = document.createElement('div');
      imageItem.classList.add('image-item');

      const img = document.createElement('img');
      img.src = event.target.result;

      const removeBtn = document.createElement('button');
      removeBtn.textContent = 'X';
      removeBtn.classList.add('remove-btn');
      removeBtn.onclick = function () {
        removeImage(imageItem, file);
      };

      imageItem.appendChild(img);
      imageItem.appendChild(removeBtn);
      imageContainer.appendChild(imageItem);
    };
    reader.readAsDataURL(file);
  }
}

function removeImage(imageItem, fileToRemove) {
  imageItem.remove();

  const files = Array.from(fileInput.files);
  const newFiles = files.filter(file => file !== fileToRemove);
  fileInput.files = new FileListItems(newFiles);
}

if (fileInput) {
  fileInput.addEventListener('change', function (event) {
    const files = event.target.files;
    if (files.length) {
      displayImages(files);
    }
  });
}

function FileListItems(files) {
  const dataTransfer = new DataTransfer();
  files.forEach(file => dataTransfer.items.add(file));
  return dataTransfer.files;
}

document.getElementById('img_upload').addEventListener('change', function (event) {
  const file = event.target.files[0];
  const preview = document.getElementById('img_preview');

  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      preview.src = e.target.result;
    };
    reader.readAsDataURL(file);
  } else {

  }
});

document.getElementById('img_upload2').addEventListener('change', function (event) {
  const file = event.target.files[0];
  const preview = document.getElementById('img_preview2');

  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      preview.src = e.target.result;
    };
    reader.readAsDataURL(file);
  } else {

  }
});