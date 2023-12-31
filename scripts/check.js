
let checkboxes = document.querySelectorAll(".demand-checkbox");


window.addEventListener('load', () => {
  checkboxes.forEach((checkbox) => {
    const savedData = localStorage.getItem(`checkbox_${checkbox.value}`);
    if (savedData) {
      const { checked, date, leader } = JSON.parse(savedData);
      checkbox.checked = checked;

      const dateElement = document.getElementById(`d${checkbox.value}`);
      const nameElement = document.getElementById(`n${checkbox.value}`);

      if (date) {
        const formattedDate = new Date(date);
        const day = formattedDate.getDate().toString().padStart(2, "0");
        const month = (formattedDate.getMonth() + 1).toString().padStart(2, "0");
        const year = formattedDate.getFullYear();
        dateElement.innerText = `${day}-${month}-${year}`;
      } else {
        dateElement.innerText = "";
      }

      nameElement.innerText = leader || "";
    }
  });
});


checkboxes.forEach((checkbox) => {
  checkbox.addEventListener("change", (e) => {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);

    const formData = new FormData();
    formData.append("roverid", urlParams.get("id"));
    formData.append("demandid", e.target.value);

    if (e.target.checked) {
      formData.append("checked", "ins");
    } else {
      formData.append("checked", "del");
    }

    fetch("/rms/php/handlecheck.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error("Network response was not ok");
        }
        return response.json();
      })
      .then((data) => {
        const dateElement = document.getElementById(`d${e.target.value}`);
        const nameElement = document.getElementById(`n${e.target.value}`);

        if (data.date !== "") {
          const d = new Date(data.date);
          const day = d.getDate().toString().padStart(2, "0");
          const month = (d.getMonth() + 1).toString().padStart(2, "0");
          const year = d.getFullYear();
          const formattedDate = `${day}-${month}-${year}`;
          dateElement.innerText = formattedDate;
        } else {
          dateElement.innerText = "";
        }

        nameElement.innerText = data.leader;


        localStorage.setItem(
          `checkbox_${e.target.value}`,
          JSON.stringify({
            checked: e.target.checked,
            date: data.date !== "" ? data.date : null,
            leader: data.leader !== "" ? data.leader : null,
          })
        );
      })
      .catch((error) => {
        console.error(error);
      });
  });
});
