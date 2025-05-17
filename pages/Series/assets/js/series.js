window.addEventListener("DOMContentLoaded", function () {
  const genreButtons = document.querySelectorAll(
    ".genre-buttons button[data-genre]"
  );
  const cards = Array.from(document.querySelectorAll(".series-card"));

  genreButtons.forEach((btn) => {
    btn.addEventListener("click", function () {
      const selectedGenre = btn.getAttribute("data-genre");
      if (selectedGenre === "All") {
        cards.forEach((card) => {
          card.style.display = "";
        });
      } else {
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
