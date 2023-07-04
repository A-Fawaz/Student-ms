const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const nextBtnFourth = document.querySelector(".next-3");
const prevBtnFourth = document.querySelector(".prev-3");
const prevBtnFifth = document.querySelector(".prev-4");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
const inputs = document.querySelectorAll("input[type='text'], input[type='password'], input[type='number'], input[type='date'], select");

let current = 1;

nextBtnFirst.addEventListener("click", function (event) {
  event.preventDefault();
  if (validateFormStep(current)) {
    slidePage.style.marginLeft = "-25%";
    updateProgress(current);
    current += 1;
  }
});

nextBtnSec.addEventListener("click", function (event) {
  event.preventDefault();
  if (validateFormStep(current)) {
    slidePage.style.marginLeft = "-53%";
    updateProgress(current);
    current += 1;
  }
});

nextBtnThird.addEventListener("click", function (event) {
  event.preventDefault();
  if (validateFormStep(current)) {
    slidePage.style.marginLeft = "-79%";
    updateProgress(current);
    current += 1;
  }
});

nextBtnFourth.addEventListener("click", function (event) {
  event.preventDefault();
  if (validateFormStep(current)) {
    slidePage.style.marginLeft = "-107%";
    updateProgress(current);
    current += 1;
  }
});

submitBtn.addEventListener("click", function (event) {
  event.preventDefault();
  if (validateFormStep(current)) {
    updateProgress(current);
    setTimeout(function () {
      alert("Your Form Successfully Signed up");
      location.reload();
    }, 800);
  }
});

prevBtnSec.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  current -= 1;
  updateProgress(current);
});

prevBtnThird.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  current -= 1;
  updateProgress(current);
});

prevBtnFourth.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-53%";
  current -= 1;
  updateProgress(current);
});

prevBtnFifth.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-79%";
  current -= 1;
  updateProgress(current);
});

// Function to validate form inputs for the given step
function validateFormStep(step) {
  const currentInputs = slidePage.querySelectorAll(`.page:nth-child(${step}) input, .page:nth-child(${step}) select`);

  let isValid = true;

  currentInputs.forEach((input) => {
    if (input.value.trim() === "") {
      isValid = false;
      showError(input, "please fill this");
    } else {
      removeError(input);
    }
  });

  return isValid;
}

// Function to show an error message for a field
function showError(field, errorMessage) {
  const errorContainer = field.parentElement.querySelector(".error-message");
  if (errorContainer) {
    errorContainer.textContent = errorMessage;
  } else {
    const newErrorContainer = document.createElement("div");
    newErrorContainer.classList.add("error-message");
    newErrorContainer.textContent = errorMessage;
    field.classList.add("error");
    field.parentElement.appendChild(newErrorContainer);
  }
}

// Function to remove an error message for a field
function removeError(field) {
  field.classList.remove("error");

  const errorContainer = field.parentElement.querySelector(".error-message");
  if (errorContainer) {
    field.parentElement.removeChild(errorContainer);
  }
}

// Function to update the progress indicators
function updateProgress(currentStep) {
  bullet.forEach((b, index) => {
    if (index < currentStep - 1) {
      b.classList.add("active");
    } else {
      b.classList.remove("active");
    }
  });

  progressCheck.forEach((pc, index) => {
    if (index < currentStep - 1) {
      pc.classList.add("active");
    } else {
      pc.classList.remove("active");
    }
  });

  progressText.forEach((pt, index) => {
    if (index < currentStep - 1) {
      pt.classList.add("active");
    } else {
      pt.classList.remove("active");
    }
  });
}
