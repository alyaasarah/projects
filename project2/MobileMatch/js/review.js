let reviews = [];

function submitReview(event) {
  event.preventDefault();

  // get form data
  let user = document.getElementById('user').value;
  let device = document.getElementById('device').value;
  let comment = document.getElementById('comment').value;

  // create a new review object
  let review = {
    user: user,
    device: device,
    comment: comment
  };

  // add the review to the reviews array
  reviews.push(review);

  // clear the form
  document.getElementById('comment-form').reset();

  // display the reviews
  displayReviews();
}

function displayReviews() {
  let reviewContainer = document.getElementById('review-container');
  reviewContainer.innerHTML = '';

  // loop through the reviews array and display each review
  for (let i = 0; i < reviews.length; i++) {
    let review = reviews[i];

    let reviewHTML = `
      <div class="review">
        <h4>${review.user} - ${review.device}</h4>
        <p>${review.comment}</p>
      </div>
    `;

    reviewContainer.innerHTML += reviewHTML;
  }
}

// attach submitReview function to form submit event
let commentForm = document.getElementById('comment-form');
commentForm.addEventListener('submit', submitReview);
