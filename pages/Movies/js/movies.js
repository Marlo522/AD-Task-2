window.addEventListener("DOMContentLoaded", function () {
  const genreButtons = document.querySelectorAll(
    ".genre-buttons button[data-genre]"
  );
  const cards = Array.from(document.querySelectorAll(".series-card"));

  genreButtons.forEach((btn) => {
    btn.addEventListener("click", function () {
      const selectedGenre = btn.getAttribute("data-genre");
      if (selectedGenre === "All") {
        // Show all cards if "All" is picked
        cards.forEach((card) => {
          card.style.display = "";
        });
      } else {
        // Show only cards matching the selected genre
        cards.forEach((card) => {
          const genres = card.getAttribute("data-genres");
          if (
            genres &&
            genres
              .split(",")
              .map((g) => g.trim())
              .includes(selectedGenre)
          ) {
            card.style.display = "";
          } else {
            card.style.display = "none";
          }
        });
      }
    });
  });
});
