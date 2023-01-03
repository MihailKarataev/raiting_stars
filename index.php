<div class="rating">    
    <div class="rating__body">
        <div class="rating__active"></div>
        <div class="rating__active">
            <input type="radio" class="rating__item" value="1" name="rating">
            <input type="radio" class="rating__item" value="2" name="rating">
            <input type="radio" class="rating__item" value="3" name="rating">
            <input type="radio" class="rating__item" value="4" name="rating">
            <input type="radio" class="rating__item" value="5" name="rating">
        </div>
    </div>
    <div class="rating__value">5</div><!--значение этого блока будет отображать значение рейтинга и заполняемость звезд(принимает значения от 0 до 5 с шагом 0,1)-->
</div>

<script>
  const ratings = document.querySelectorAll('.rating');
  if(ratings.length > 0) {
  	initRatings();
  }
    
  function initRatings() {
  	let ratingActive, ratingValue;
    for (let index = 0; index < ratings.length; index++){
    	const rating = ratings[index];
      initRating(rating);
    }
    function initRating(rating){
    	initRatingVars(rating);
    	setRatingActiveWidth();
    }
    function initRatingVars(rating){
    	ratingActive = rating.querySelector('.rating__active');
    	ratingValue = rating.querySelector('.rating__value');
    }
    function setRatingActiveWidth(index = ratingValue.innerHTML){
      const ratingActiveWidth = index / 0.05;
      ratingActive.style.width = ratingActiveWidth+'%';
      
    }
  }
</script>