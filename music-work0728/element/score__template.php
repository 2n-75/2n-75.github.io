<div id="score-component" class="swiper-container">
	<div class="swiper-wrapper">
		<score v-for="question in questions" v-bind:key="question.id" v-bind:question="question"></score>
	</div>
	<div id="prevBtn" class="swiper-button-prev" onclick="swiperBtnClick('prev');"></div>
	<div id="nextBtn" class="swiper-button-next" onclick="swiperBtnClick('next');"></div>
</div>

<!-- vue template -->
<script type="text/x-template" id="score-template">
	<div class="swiper-slide" >
	<div class="swiper-slide__inner">
		<!--出題エリア-->
		<section id="dropzone" class="dropzone">
			<div>
				<p class="middleLine"></p>
				<p id="timing-bar" class="timing-bar absolute">|</p>
				<div class="box absolute hint hidden" v-for="item, index in hints" v-bind:key="item.no" v-bind:class="item.className" v-bind:style="{left: item.boxPos + '%' }"></div>
			</div>

			<div :options="{group:'ITEMS'}" class="dropzone__inner flex-area">
				<div class="box absolute" v-for="item, index in items" v-bind:key="item.no" v-bind:class="item.className" v-bind:style="{left: item.boxPos + '%' }"></div>
			</div>
		</section>

		<!--回答エリア-->
		<section class="relative">
			<div :options="{group:'ITEMS'}" class="flex-area">
				<div class="box box--border" v-for="item, index in items2" v-bind:key="item.no" v-bind:class="item.className" v-on:click="noteClick(item.length)"></div>
			</div>
			<div class="mg-10 btn-sound-frame">
				<!--
					<div class="btn-circle btn-sound absolute" onclick="playSound(2) , barActive()">
					<span><i classk="fas fa-music"></i></span>
				</div>
			-->
			</div>
		</section>
		<section class="mess-area flex-area">
			<p class="mess">{{mess}}</p>
		</section>
		</div>
	</div>
</script>
