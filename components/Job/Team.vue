<script setup>
const props=defineProps({
	teams: Object
});

</script>
<template lang="">
    <!-- Team One -->
	<section class="team-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">Team Member</div>
				<h2 class="sec-title_heading">Passionate Personalities, <br> <span class="theme_color">Versatile</span> Brains</h2>
			</div>
			<div class="row clearfix">
				
				<!-- Team One -->
				<div v-for="member in teams" class="team_one col-lg-3 col-md-6 col-sm-12">
					<div class="team_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="team_one-image">
							<img :src="member.image" alt="" />
							<div class="team_one-content">
								<h5 class="team-one_title"><a href="team-detail.html">{{ member.name }}</a></h5>
								<div class="team-one_designation">{{ member.role }}</div>
							</div>
							
							<div class="team_one-overlay">
								<div class="team-one_overlay-content">
									<div class="team_one-text">{{ member.descriptoin }}</div>
									<a class="team_one-more" href="team-detail.html">Read more</a>
								</div>
							</div>
							
						</div>
						<!-- Social Box -->
						<ul class="team-one_social">
							<li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
							<li><a href="https://www.twitter.com/" class="fa-brands fa-twitter fa-fw"></a></li>
							<li><a href="https://dribbble.com/" class="fa-brands fa fa-dribbble fa-fw"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team One -->
</template>
<style lang="">
    
</style>