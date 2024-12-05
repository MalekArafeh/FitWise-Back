function busynessIndicator(maxCapacity) {
  fetch("/data/people_count.json").then((response) =>
    response
      .json()
      .then((data) => {
        const busynessClass = document.querySelector(".busyness");
        let currentCount = data.count;
        let percentage = (currentCount / maxCapacity) * 100;
        busynessClass.style.width = `${percentage}%`;
        const icon = document.querySelector(".status-icon");
        if (percentage >= 0 && percentage < 33) {
          icon.style.color = "#c9e983";
        } else if (percentage >= 33 && percentage < 66) {
          icon.style.color = "#f57c00";
        } else {
          icon.style.color = "#ea0404";
        }
      })
      .catch((error) => console.error("Error fetching data", error))
  );
}

document.addEventListener("DOMContentLoaded", () => {
  busynessIndicator(250);
});
