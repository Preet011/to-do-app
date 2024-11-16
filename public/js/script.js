document.addEventListener("DOMContentLoaded", function () {
  console.log("JS loaded");

  // task deletion with confirmation
  const deleteLinks = document.querySelectorAll("a.delete-task");
  console.log("Delete links:", deleteLinks);

  deleteLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      const confirmed = confirm("Are you sure you want to delete this task?");
      if (!confirmed) {
        event.preventDefault();
      }
    });
  });

  // Simple form validation
  const taskForm = document.querySelector("form");
  console.log("Task form:", taskForm);

  if (taskForm) {
    taskForm.addEventListener("submit", function (event) {
      const titleInput = document.querySelector('input[name="title"]');
      console.log("Title input:", titleInput);

      if (titleInput.value.trim() === "") {
        alert("Please enter a task title.");
        event.preventDefault();
      }
    });
  }
});
``;
