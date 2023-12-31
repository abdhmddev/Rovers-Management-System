let checkboxes = document.querySelectorAll(".demand-checkbox");

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
        console.log(response);
        if (!response.ok) {
          throw new Error("Network response was not ok");
        }
        return response.json();
      })
      .then((data) => {
        console.log("Response from PHP:", data);
      })
      .catch((error) => {
        console.error(error);
      });
  });
});
