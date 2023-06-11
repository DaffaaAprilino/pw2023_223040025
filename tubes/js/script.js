const keyword = document.getElementById('keyword');
const searchContainer = document.getElementById('search-container');
// const searchButton = document.getElementById('search-button');

// searchButton.style.display = 'none';

keyword.onkeyup = function() {
  fetch('ajax/search.php?keyword=' + keyword.value)
  .then((response) => (response.text()))
  .then((text) => (searchContainer.innerHTML = text));
};


// preview imange untuk tambah dan ubah
function previewImage() {
  const gambar = document.querySelector('.gambar')
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}
