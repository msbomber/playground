<?php get_header(); ?>
<div class="quote__container">
  <div class="quote">
    <form id="quoteForm" class="quote__form">
      <div class="quote__step quote__step--1" data-step="1">
        <h4>Project Type</h4>
        <p class="quote__text">Choose one or more formats you would like for your track/s</p>
        <div class="quote__radio">
          <input type="radio" id="formats1" name="formats" value="1" required>
          <label for="formats1">Music</label>
        </div>
        <div class="quote__radio">
          <input type="radio" id="formats2" name="formats" value="2" required>
          <label for="formats2">Podcast</label>
        </div>
        <button class="quote__next" type="button" onclick="nextStep()">Continue<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 12H21.5M21.5 12L13 4M21.5 12L13 20" stroke="#FFFEFE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
      </div>
      <div class="quote__step quote__step--2" data-step="2">
        <h4>Project Name</h4>
        <p>Enter name of your next hit track or project </p>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter Project/Track Name" required>
        <button type="button" onclick="nextStep()">Continue</button>
      </div>
      <div class="quote__step quote__step--3" data-step="3">
        <button type="button" onclick="prevStep()">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 12H3M3 12L11.5 4M3 12L11.5 20" stroke="#0A0A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <h4>Choose a mixing format</h4>
        <p>Choose one or more formats you would like for your Podcast</p>
        <input type="radio" id="option1" name="mixingFormat" value="1" required>
        <label for="mixingFormat1">Stereo Mastering</label>
        <input type="radio" id="mixingFormat2" name="mixingFormat" value="2" required>
        <label for="mixingFormat2">Dolby Atmos</label>
        <button type="button" onclick="nextStep()">Continue</button>
      </div>
      <div class="quote__step quote__step--4" data-step="4">
        <button type="button" onclick="prevStep()">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 12H3M3 12L11.5 4M3 12L11.5 20" stroke="#0A0A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <h4>What are we mixing for you</h4>
        <p>Let us know the scope of your project, so we can tailor our mixing offering to your needs</p>
        <input type="radio" id="option1" name="mixing" value="1" required>
        <label for="mixing1">Single</label>
        <p>1 Track</p>
        <input type="radio" id="mixing2" name="mixing" value="2" required>
        <label for="mixing2">EP</label>
        <p>2-7 Tracks</p>
        <div class="quote__quantity--ep">
          <button class="plus-minus" type="button" onclick="decrement()">-</button>
          <input type="number" id="quantityEP" name="quantityEP" value="2" min="2" max="7" required>
          <button class="plus-minus" type="button" onclick="increment()">+</button>
        </div>
        <input type="radio" id="mixing3" name="mixing" value="3" required>
        <label for="mixing3">Album</label>
        <p>6-30 Tracks</p>
        <div class="quote__quantity--album">
          <button class="plus-minus" type="button" onclick="decrement()">-</button>
          <input type="number" id="quantityAlbum" name="quantityAlbum" value="1" min="1" max="30" required>
          <button class="plus-minus" type="button" onclick="increment()">+</button>
        </div>
        <button type="button" onclick="nextStep()">Continue</button>
      </div>
      <div class="quote__step quote__step--5" data-step="5">
        <button type="button" onclick="prevStep()">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 12H3M3 12L11.5 4M3 12L11.5 20" stroke="#0A0A0A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <h4>Choose your genre</h4>
        <p>Select the closest genre that matches your sound so we can select the best engineer for your mix</p>
        <input type="submit" value="Continue">
      </div>
    </form>
  </div>
</div>

<style>
  .quote__step {
    display: none;
  }
  .quote__step:first-child {
    display: block;
  }
</style>

<script>
  let currentStep = 1;

  function nextStep() {
    const currentStepElement = document.querySelector(`.quote__step[data-step="${currentStep}"]`);
    const nextStepElement = document.querySelector(`.quote__step[data-step="${currentStep + 1}"]`);

    if (nextStepElement) {
      currentStepElement.style.display = 'none';
      nextStepElement.style.display = 'block';
      currentStep += 1;
    }
  }

  function prevStep() {
    const currentStepElement = document.querySelector(`.quote__step[data-step="${currentStep}"]`);
    const prevStepElement = document.querySelector(`.quote__step[data-step="${currentStep - 1}"]`);

    if (prevStepElement) {
      currentStepElement.style.display = 'none';
      prevStepElement.style.display = 'block';
      currentStep -= 1;
    }
  }
</script>