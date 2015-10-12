<?php

namespace App\Helpers;

  /* Define strings of text containing works to be used as the basis to generate nGrams*/

class TextGeneratorData{

  static $smallString = "this is small";

  static $repeatable = "your wish is my command your wish is my desire your wish is my pleasure your wish is my command ";

  static $cooking = "
  Beat egg until fluffy.
  Add milk and melted margarine.
  Add dry ingredients and mix well.
  Heat a heavy griddle or fry pan which is greased with a little butter on a paper towel.
  The pan is hot enough when a drop of water breaks into several smaller balls which 'dance' around the pan.
  Pour a small amount of batter (approx 1/4 cup) into pan and tip to spread out or spread with spoon.
  When bubbles appear on surface and begin to break, turn over and cook the other side.

  Preheat oven to 200 degrees; have a baking sheet or heatproof platter ready to keep cooked pancakes warm in the oven. In a small bowl, whisk together flour, sugar, baking powder, and salt; set aside.
  In a medium bowl, whisk together milk, butter (or oil), and egg. Add dry ingredients to milk mixture; whisk until just moistened (do not overmix; a few small lumps are fine).
  Heat a large skillet (nonstick or cast-iron) or griddle over medium. Fold a sheet of paper towel in half, and moisten with oil; carefully rub skillet with oiled paper towel.
  For each pancake, spoon 2 to 3 tablespoons of batter onto skillet, using the back of the spoon to spread batter into a round (you should be able to fit 2 to 3 in a large skillet).
  Cook until surface of pancakes have some bubbles and a few have burst, 1 to 2 minutes. Flip carefully with a thin spatula, and cook until browned on the underside, 1 to 2 minutes more. Transfer to a baking sheet or platter; cover loosely with aluminum foil, and keep warm in oven. Continue with more oil and remaining batter. (You'll have 12 to 15 pancakes.) Serve warm, with desired toppings.

  In a medium bowl, stir together the barbeque sauce, whiskey, Worcestershire sauce, ginger, cayenne pepper, paprika, chili powder, garlic powder, onion salt, oregano, red pepper flakes, sugar, ground black pepper, and hot pepper sauce. Cover, and keep refrigerated until ready to use.

  Melt the butter in a large saucepan over medium heat. Add the onion juice, garlic juice, hot sauce, Worcestershire sauce, black pepper, cayenne pepper and beer. Mix until well blended.
  Use a marinade injecting syringe or turkey baster with an injector tip to inject the marinade all over the turkey including the legs, back, wings, thighs and breasts. Place in a large plastic bag and marinate overnight in the refrigerator. Do not use a kitchen trash bag. If your turkey is large, you can use an oven bag.
  When it's time to fry, measure the amount of oil needed by lowering the turkey into the fryer and filling with enough oil to cover it. Remove the turkey and set aside.
  Heat the oil to 365 degrees F (185 degrees C). When the oil has come to temperature, lower the turkey into the hot oil slowly using the hanging device that comes with turkey deep-fryers. The turkey should be completely submerged in the oil. Cook for 36 minutes, or 3 minutes per pound of turkey. The turkey is done when the temperature in the thickest part of the thigh reaches 180 degrees F (80 degrees C). Turn off the flame and slowly remove from the oil, making sure all of the oil drains out of the cavity. Allow to rest on a serving platter for about 20 minutes before carving.

  Preheat oven to 350 degrees F (175 degrees C).
  Mix sausage, ground turkey, eggs, Cheddar cheese, onion, and black pepper in a large bowl; roll into 1 1/2-inch balls. Arrange meatballs onto baking sheets.
  Bake in preheated oven until no longer pink in the center and the juices run clear, 18 to 20 minutes. An instant-read thermometer inserted into the center should read at least 165 degrees F (74 degrees C).
  ";



  static $loremIpsum = "
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
    voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
    sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
    non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima
    veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui
    dolorem eum fugiat quo voluptas nulla pariatur?

    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
    corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in
    culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis
    est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
    impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis
    dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
    necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
    recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
    ";

    static $songs= "
    With Crimson in triumph flashing
    'Mid the strains of victory,
    Poor Eli's hopes we are dashing
    Into blue obscurity.
    Resistless our team sweeps goalward
    With the fury of the blast;
    We'll fight for the name of Harvard
    'Til the last white line is passed.
    Harvard! Harvard! Harvard!

    Fight fiercely, Harvard!
    Fight, fight, fight!
    Demonstrate to them our skill.
    Albeit they possess the might,

    Nonetheless we have the will

    Ten thousand men of Harvard
    Want vict'ry today,
    For they know that o'er old Eli
    Fair Harvard holds sway.
    So then we'll conquer old Eli's men,
    And when the game ends, we'll sing again:
    Ten thousand men of Harvard
    gained vict'ry today!

    Illegitimum Non Carborundum;
    Domine salvum fac.
    Illegitimum Non Carborundum;
    Domine salvum fac.
    Gaudeamus igitur!
    Veritas non sequitur?
    Illegitimum non Carborundum -- ipso facto!




    I heard that you're settled down.
    That you found a girl and you're married now.
    I heard that your dreams came true.
    Guess she gave you things I didn't give to you.

    Old friend, why are you so shy?
    Ain't like you to hold back or hide from the light.

    I hate to turn up out of the blue, uninvited.
    But I couldn't stay away, I couldn't fight it.
    I had hoped you'd see my face and that you'd be reminded.
    That for me, it isn't over.

    Never mind, I'll find someone like you.
    I wish nothing but the best for you, too.
    Don't forget me, I beg, I remember you said.
    Sometimes it lasts in love, but sometimes it hurts instead.
    Sometimes it lasts in love, but sometimes it hurts instead.

    You know how the time flies
    Only yesterday was the time of our lives
    We were born and raised in a summer haze
    Bound by the surprise of our glory days

    I hate to turn up out of the blue, uninvited
    But I couldn't stay away, I couldn't fight it
    I had hoped you'd see my face and that you'd be reminded
    That for me, it isn't over

    Never mind, I'll find someone like you
    I wish nothing but the best for you, too
    Don't forget me, I beg, I remember you said
    Sometimes it lasts in love, but sometimes it hurts instead, yeah

    Nothing compares, no worries or cares
    Regrets and mistakes, they're memories made
    Who would have known how bittersweet this would taste?

    Never mind, I'll find someone like you
    I wish nothing but the best for you
    Don't forget me, I beg, I remember you said
    Sometimes it lasts in love, but sometimes it hurts instead

    Never mind, I'll find someone like you
    I wish nothing but the best for you, too
    Don't forget me, I beg, I remember you said
    Sometimes it lasts in love, but sometimes it hurts instead
    Sometimes it lasts in love, but sometimes it hurts instead

    There's a fire starting in my heart
    Reaching a fever pitch, it's bringing me out the dark
    Finally I can see you crystal clear
    [Clean version:] Go 'head and sell me out and I'll lay your ship bare
    [Explicit version:] Go 'head and sell me out and I'll lay your shit bare
    See how I leave with every piece of you
    Don't underestimate the things that I will do

    There's a fire starting in my heart
    Reaching a fever pitch
    And it's bringing me out the dark

    The scars of your love remind me of us
    They keep me thinking that we almost had it all
    The scars of your love, they leave me breathless
    I can't help feeling
    We could have had it all
    (You're gonna wish you never had met me)
    Rolling in the deep
    (Tears are gonna fall, rolling in the deep)
    You had my heart inside of your hand
    (You're gonna wish you never had met me)
    And you played it, to the beat
    (Tears are gonna fall, rolling in the deep)

    Baby, I have no story to be told
    But I've heard one on you
    And I'm gonna make your head burn
    Think of me in the depths of your despair
    Make a home down there
    As mine sure won't be shared

    (You're gonna wish you never had met me)
    The scars of your love remind me of us
    (Tears are gonna fall, rolling in the deep)
    They keep me thinking that we almost had it all
    (You're gonna wish you never had met me)
    The scars of your love, they leave me breathless
    (Tears are gonna fall, rolling in the deep)
    I can't help feeling
    We could have had it all
    (You're gonna wish you never had met me)
    Rolling in the deep
    (Tears are gonna fall, rolling in the deep)
    You had my heart inside of your hand
    (You're gonna wish you never had met me)
    And you played it, to the beat
    (Tears are gonna fall, rolling in the deep)
    We could have had it all
    Rolling in the deep
    You had my heart inside of your hand
    But you played it, with a beating

    Throw your soul through every open door (woah)
    Count your blessings to find what you look for (woah)
    Turn my sorrow into treasured gold (woah)
    You'll pay me back in kind and reap just what you sow (woah)
    (You're gonna wish you never had met me)
    We could have had it all
    (Tears are gonna fall, rolling in the deep)
    We could have had it all
    (You're gonna wish you never had met me)
    It all, it all, it all
    (Tears are gonna fall, rolling in the deep)

    We could have had it all
    (You're gonna wish you never had met me)
    Rolling in the deep
    (Tears are gonna fall, rolling in the deep)
    You had my heart inside of your hand
    (You're gonna wish you never had met me)
    And you played it to the beat
    (Tears are gonna fall, rolling in the deep)

    We could have had it all
    (You're gonna wish you never had met me)
    Rolling in the deep
    (Tears are gonna fall, rolling in the deep)
    You had my heart inside of your hand
    (You're gonna wish you never had met me)

    But you played it
    You played it
    You played it
    You played it to the beat.


    I let it fall, my heart,
    And as it fell you rose to claim it
    It was dark and I was over
    Until you kissed my lips and you saved me

    My hands, they're strong
    But my knees were far too weak
    To stand in your arms
    Without falling to your feet

    But there's a side to you that I never knew, never knew
    All the things you'd say, they were never true, never true
    And the games you'd play, you would always win, always win

    But I set fire to the rain
    Watched it pour as I touched your face
    Let it burn while I cry
    'Cause I heard it screaming out your name, your name

    When laying with you
    I could stay there, close my eyes
    Feel you here, forever
    You and me together, nothing gets better

    Cause there's a side to you that I never knew, never knew
    All the things you'd say, they were never true, never true
    And the games you'd play, you would always win, always win

    But I set fire to the rain
    Watched it pour as I touched your face
    Let it burn while I cried
    'Cause I heard it screaming out your name, your name

    I set fire to the rain
    And I threw us into the flames
    Where I felt something die, 'cause I knew that
    That was the last time, the last time

    Sometimes I wake up by the door
    As if that heart you caught is still waiting for you
    Even now when it's already over
    I can't help myself from looking for you

    I set fire to the rain
    Watched it pour as I touched your face
    Let it burn while I cried
    'Cause I heard it screaming out your name, your name

    I set fire to the rain
    And I threw us into the flames
    Where I felt something die
    'Cause I knew that that was the last time, the last time, oh
    Oh, oh

    Let it burn, oh
    Let it burn
    Let it burn

    I can't get no satisfaction
    I can't get no satisfaction
    'Cause I try and I try and I try and I try
    I can't get no, I can't get no
    When I'm drivin' in my car
    And that man comes on the radio
    And he's tellin' me more and more
    About some useless information
    Supposed to fire my imagination
    I can't get no, oh no no no
    Hey hey hey, that's what I say
    I can't get no satisfaction
    I can't get no satisfaction
    'Cause I try and I try and I try and I try
    I can't get no, I can't get no
    When I'm watchin' my TV
    And that man comes on to tell me
    How white my shirts can be
    But he can't be a man 'cause he doesn't smoke
    The same cigarrettes as me
    I can't get no, oh no no no
    Hey hey hey, that's what I say
    I can't get no satisfaction
    I can't get no girl reaction
    Cause I try and I try and I try and I try
    I can't get no, I can't get no
    When I'm ridin' round the world
    And I'm doin' this and I'm signing that
    And I'm tryin' to make some girl
    Who tells me baby better come back later next week
    Cause you see I'm on losing streak
    I can't get no, oh no no no
    Hey hey hey, that's what I say
    I can't get no, I can't get no
    I can't get no satisfaction
    No satisfaction, no satisfaction, no satisfaction

    It is the evening of the day
    I sit and watch the children play
    Smiling faces I can see
    But not for me
    I sit and watch
    As tears go by
    My riches can't buy everything
    I want to hear the children sing
    All I hear is the sound
    Of rain falling on the ground
    I sit and watch
    As tears go by
    It is the evening of the day
    I sit and watch the children play
    Doin' things I used to do
    They think are new
    I sit and watch
    As tears go by

    Bored on Friday night
    Spinning 'round just like I'm hypnotised, oh oh
    Need some neon lights
    Wanna feel like I'm electrified, so help me out

    Get your boyfriend's car
    Come and pick me up, oh
    Let's take it for a ride
    What trouble can we find?

    One night, and we're gonna come and crash the party
    Weren't invited but we're feeling so outrageous
    Just like we're famous
    Got one night, and we're gonna come and get it started
    Now we're falling down the stairs
    We act so shameless
    Come on let's lose control!

    One night, and we're gonna come and crash the party
    Weren't invited but we're feeling so outrageous
    Just like we're famous
    Got one night, and we're gonna come and get it started
    Now we're falling down the stairs
    We act so shameless
    Just like we're famous

    Ah ah ah oh oh
    Oh ah ah ah oh oh oh
    Ah ah ah oh oh
    Just like we're famous

    Blown up like balloons
    Purple glitter flying through the air, oh oh
    Sweat drips from the roof
    And you know we're Lucy in the sky of diamonds

    Music playing loud
    Tripping through the crowd, oh
    Put your sunglasses on
    Don't care if we look dumb

    One night, and we're gonna come and crash the party
    Weren't invited but we're feeling so outrageous
    Just like we're famous
    Got one night, and we're gonna come and get it started
    Now we're falling down the stairs
    We act so shameless
    Come on let's lose control!

    One night, and we're gonna come and crash the party
    Weren't invited but we're feeling so outrageous
    Just like we're famous
    Got one night, and we're gonna come and get it started
    Now we're falling down the stairs
    We act so shameless
    Come on let's lose control!

    Ah ah ah oh oh
    Oh ah ah ah oh oh oh
    Ah ah ah oh oh
    Just like we're famous

    Ah ah ah oh oh
    Oh ah ah ah oh oh oh
    Ah ah ah oh oh
    Just like we're famous

    One night, and we're gonna come and crash the party
    Weren't invited but we're feeling so outrageous
    Just like we're famous
    Got one night, and we're gonna come and get it started
    Now we're falling down the stairs
    We act so shameless
    Come on let's lose control!

    Ah ah ah oh oh
    Oh ah ah ah oh oh oh
    Ah ah ah oh oh
    Just like we're famous

    Ah ah ah oh oh
    Oh ah ah ah oh oh oh
    Ah ah ah oh oh
    Just like we're famous

    Yesterday, all my troubles seemed so far away
    Now it looks as though they're here to stay
    oh, I believe in yesterday
    Suddenly I'm not half the man I used to be
    There's a shadow hanging over me
    Oh, yesterday came suddenly
    Why she had to go?
    I don't know, she wouldn't say
    I said something wrong
    Now I long for yesterday
    Yesterday love was such an easy game to play
    Now I need a place to hide away
    Oh, I believe in yesterday.
    Why she had to go?
    I don't know, she wouldn't say
    I said something wrong
    Now I long for yesterday
    Yesterday love was such an easy game to play
    Now I need a place to hide away
    Oh, I believe in yesterday.
    He's a real Nowhere Man
    Sitting in his Nowhere Land
    Making all his nowhere plans for nobody
    Doesn't have a point of view
    Knows not where he's going to
    Isn't he a bit like you and me?
    Nowhere Man, please listen
    You don't know what you're missing
    Nowhere Man, the world is at your command
    He's as blind as he can be
    Just sees what he wants to see
    Nowhere Man, can you see me at all?
    Nowhere Man, don't worry
    Take your time, don't hurry
    Leave it all 'til somebody else lends you a hand
    Doesn't have a point of view
    Knows not where he's going to
    Isn't he a bit like you and me?
    Nowhere Man, please listen
    You don't know what you're missing
    Nowhere Man, the world is at your command
    He's a real Nowhere Man
    Sitting in his Nowhere Land
    Making all his nowhere plans for nobody
    Making all his nowhere plans for nobody
    Making all his nowhere plans for nobody
    When I find myself in times of trouble
    Mother Mary comes to me
    Speaking words of wisdom, let it be
    And in my hour of darkness
    She is standing right in front of me
    Speaking words of wisdom, let it be
    Let it be, let it be
    Let it be, let it be
    Whisper words of wisdom
    Let it be
    And when all the brokenhearted people
    Living in the world agree
    There will be an answer, let it be
    For though they may be parted
    There is still a chance that they will see
    There will be an answer, let it be
    Let it be, let it be
    Let it be, let it be
    Yeah, there will be an answer let it be
    Let it be, let it be
    Let it be, let it be
    Whisper words of wisdom
    Let it be
    Let it be, let it be
    Let it be, yeah, let it be
    Whisper words of wisdom
    Let it be
    And when the night is cloudy
    There is still a light that shines on me
    Shine on until tomorrow, let it be
    I wake up to the sound of music
    Mother Mary comes to me
    Speaking words of wisdom, let it be
    Yeah, let it be, let it be
    Let it be, yeah, let it be
    There will be an answer, let it be
    Let it be, let it be
    Let it be, yeah, let it be
    Whisper words of wisdom
    Let it be
    When I find myself in times of trouble
    Mother Mary comes to me
    Speaking words of wisdom, let it be
    And in my hour of darkness
    She is standing right in front of me
    Speaking words of wisdom, let it be
    Let it be, let it be
    Let it be, let it be
    Whisper words of wisdom
    Let it be
    And when the brokenhearted people
    Living in the world agree
    There will be an answer, let it be
    For though they may be parted
    There is still a chance that they will see
    There will be an answer, let it be
    Let it be, let it be
    Let it be, let it be
    Yeah, there will be an answer let it be
    Let it be, let it be
    Let it be, let it be
    Whisper words of wisdom
    Let it be
    Let it be, let it be
    Let it be, yeah, let it be
    Whisper words of wisdom
    Let it be
    And when the night is cloudy
    There is still a light that shines on me
    Shine on until tomorrow, let it be
    I wake up to the sound of music
    Mother Mary comes to me
    Speaking words of wisdom, let it be
    Yeah, let it be, let it be
    Let it be, yeah, let it be
    There will be an answer, let it be
    Let it be, let it be
    Let it be, yeah, let it be
    Whisper words of wisdom
    Let it be
    Words are flowing out
    Like endless rain into a paper cup
    They slither while they pass
    They slip away across the universe
    Pools of sorrow waves of joy
    Are drifting through my open mind
    Possessing and caressing me
    Jai Guru Deva, om
    Nothing's gonna change my world
    Nothing's gonna change my world
    Nothing's gonna change my world
    Nothing's gonna change my world
    Images of broken light
    Which dance before me like a million eyes
    They call me on and on across the universe
    Thoughts meander like a restless wind
    Inside a letter box
    They tumble blindly as they make their way
    Across the universe
    Jai Guru Deva, om
    Nothing's gonna change my world
    Nothing's gonna change my world
    Nothing's gonna change my world
    Nothing's gonna change my world
    Sounds of laughter shades of life
    Are ringing through my opened ears
    Inciting and inviting me
    Limitless undying love
    Which shines around me like a million suns
    It calls me on and on across the universe
    Jai Guru Deva, om
    Nothing's gonna change my world
    Nothing's gonna change my world
    Nothing's gonna change my world
    Nothing's gonna change my world
    Jai Guru Deva
    Jai Guru Deva
    Jai Guru Deva
    Blackbird singing in the dead of night
    Take these broken wings and learn to fly
    All your life
    You were only waiting for this moment to arise
    Blackbird singing in the dead of night
    Take these sunken eyes and learn to see
    All your life
    You were only waiting for this moment to be free
    Blackbird fly, blackbird fly
    Into the light of the dark black night
    Blackbird fly, blackbird fly
    Into the light of the dark black night
    Blackbird singing in the dead of night
    Take these broken wings and learn to fly
    All your life
    You were only waiting for this moment to be free
    You were only waiting for this moment to be free
    You were only waiting for this moment to be free
    There are places I remember
    All my life, though some have changed
    Some forever not for better
    Some have gone and some remain
    All these places had their moments
    With lovers and friends
    I still can recall
    Some are dead and some are living
    In my life I've loved them all
    But of all these friends and lovers
    There is no one compares with you
    And these memories lose their meaning
    When I think of love as something new
    Though I know I'll never lose affection
    For people and things that went before
    I know I'll often stop and think about them
    In my life I love you more

    Though I know I'll never lose affection
    For people and things that went before
    I know I'll often stop and think about them
    In my life I love you more
    In my life I love you more
    Hey Jude, don't make it bad
    Take a sad song and make it better
    Remember to let her into your heart
    Then you can start to make it better
    Hey Jude, don't be afraid
    You were made to go out and get her
    The minute you let her under your skin
    Then you begin to make it better
    And anytime you feel the pain, hey Jude, refrain
    Don't carry the world upon your shoulders
    For well you know that it's a fool who plays it cool
    By making his world a little colder
    Nah nah nah nah nah nah nah nah nah
    Hey Jude, don't let me down
    You have found her, now go and get her
    Remember to let her into your heart
    Then you can start to make it better
    So let it out and let it in, hey Jude, begin
    You're waiting for someone to perform with
    And don't you know that it's just you, hey Jude, you'll do
    The movement you need is on your shoulder
    Nah nah nah nah nah nah nah nah nah yeah
    Hey jude, don't make it bad
    Take a sad song and make it better
    Remember to let her under your skin
    Then you'll begin to make it
    Better better better better better better, oh
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    Nah nah nah nah nah nah, nah nah nah, hey Jude
    (Love, love, love)
    (Love, love, love)
    (Love, love, love)
    There's nothing you can do that can't be done
    Nothing you can sing that can't be sung
    Nothing you can say but you can learn to play the game
    It's easy
    There's nothing you can make that can't be made
    No one you can save that can't be saved
    Nothing you can do but you can learn to be you in time
    It's easy
    All you need is love
    All you need is love
    All you need is love, love
    Love is all you need
    (Love, love, love)
    (Love, love, love)
    (Love, love, love)
    All you need is love
    All you need is love
    All you need is love, love
    Love is all you need
    There's nothing you can know that isn't known
    Nothing you can see that isn't shown
    There's nowhere you can be that isn't where you're meant to be
    It's easy
    All you need is love
    All you need is love
    All you need is love, love
    Love is all you need
    All you need is love, all together now
    All you need is love, everybody
    All you need is love, love
    Love is all you need
    Love is all you need
    Love is all you need
    Love is all you need
    Let me take you down
    Cause I'm going to Strawberry Fields
    Nothing is real
    And nothing to get hung about
    Strawberry Fields forever
    Living is easy with eyes closed
    Misunderstanding all you see
    It's getting hard to be someone
    But it all works out
    It doesn't matter much to me
    Let me take you down
    Cause I'm going to Strawberry Fields
    Nothing is real
    And nothing to get hung about
    Strawberry Fields forever
    No one I think is in my tree
    I mean it must be high or low
    That is you can't, you know, tune in
    But it's all right
    That is I think it's not too bad
    Let me take you down
    Cause I'm going to Strawberry Fields
    Nothing is real
    And nothing to get hung about
    Strawberry Fields forever
    Always, no sometimes, think it's me
    But you know I know when it's a dream
    I think I know I mean a yes
    But it's all wrong
    That is I think I disagree
    Let me take you down
    Cause I'm going to Strawberry Fields
    Nothing is real
    And nothing to get hung about
    Strawberry Fields forever
    Strawberry Fields forever
    Strawberry Fields forever
    Oh yeah, all right
    Are you gonna be in my dreams tonight?
    Love you, love you
    Love you, love you
    Love you, love you
    Love you, love you
    Love you, love you
    Love you, love you
    Love you, love you
    Love you, love you
    Love you, love you
    Love you, love you
    Love you, love you
    Love you, love you
    And in the end, the love you take
    Is equal to the love you make


    You've gotta a lotta lotta nerve

    Coming here when I'm still with him
    And I can't have you, it isn't fair
    Born March of '86, my birthday's coming
    And if I had one wish, yeah, you'd be it

    When you're 'round
    I lose myself inside your mouth
    You've got brown eyes like no one else
    Baby, make it to me

    Again and again, again, again, again, again
    Never stop
    Again and again, again, again, again, again
    Never stop, oh

    He never really saw me
    Or waited when we were hooking up
    Yeah, he'd a never last

    Last week when I was sad
    You said that you knew
    My eyes change from kinda green
    To kind blue, heya

    When you're 'round
    I lose myself inside your mouth
    You've got brown eyes like no one else
    Baby, make it to me

    Again and again, again, again, again, again
    Never stop
    Again and again, again, again, again, again
    Never stop, oh

    They tell me if I leave him
    Baby, would you be there?
    'Cause maybe you could
    Be m-m-mine all the t-t-time



    I'm beautiful in my way
    Cause God makes no mistakes
    I'm on the right track
    Baby I was born this way.



    One look and I'm done
    One glance from your eyes
    And I'm captivated

    The taste of your skin
    The warmth of your hungry lips
    Has me so taken and I
    Love the way you can make me dance
    From miles away

    When I'm with you I'm so sedated
    I'm captivated by you

    You're just like the wind 'cuz
    Everything moves away when you're around it

    The sun is just like the sound of
    your voice in the morning
    When you light my world up and I
    Love the way you can make me dance From miles away

    When I'm with you I'm never jaded,
    I'm captivated

    Ooh ooh ohh
    oh oh oh
    Ooh ooh ohh
    oh oh oh
    oooh oh oh oooh oh oh
    ooh ooh ooh ooh

    I, need somebody who calls my name
    When clouds are smokin up my way
    You get me through these ch-changing skies

    I, don't wanna be afraid again
    It's just that I could use a friend
    You get me through these ch-changing skies

    Give me something that I
    Can wrestle to the ground
    There isnt anything that I can't handle now. We're out
    Believe me when I say
    That I Will Be Okay
    And listen that's advised
    and my Ch-Changing skies

    Changing skies
    Ch-ch-ch-changing
    Changing skies
    Ch-ch-ch-changing
    Changing skies
    Changing skies
    Changing skies
    Ch-ch-ch-changing

    Ooh ooh ohh
    oh oh oh

    Silicone, saline, poison, inject me, baby
    I'm a free bitch
    I'm a free bitch

    Some girls won't dance to the beat of the track
    She won't walk away, but she won't look back
    She looks good, but her boyfriend says she's a mess
    She's a mess, she's a mess, now the girl is stressed
    She's a mess, she's a mess, she's a mess, she's a mess

    Baby loves to dance in the dark
    'Cause when he's lookin' she falls apart
    Baby loves to dance in the dark

    Baby loves to dance in the dark
    'Cause when he's lookin' she falls apart
    Baby loves to dance, loves to dance in the dark

    Run, run her kiss is a vampire grin
    The moon lights away while she's howlin' at him
    She looks good, but her boyfriend says she's a tramp
    She's a tramp, she's a vamp, but she still does her dance
    She's a tramp, she's a vamp, but she still kills the dance

    Baby loves to dance in the dark
    'Cause when he's lookin' she falls apart
    Baby loves to dance in the dark

    Baby loves to dance in the dark
    'Cause when he's lookin' she falls apart
    Baby loves to dance, loves to dance in the dark
    In the dark, she loves to dance in the dark
    In the dark, she loves, she loves to dance in the dark

    Marilyn, Judy, Sylvia, tell 'em how you feel, girls
    Work your blond, Benet Ramsey will haunt like Liberace
    Find your freedom in the music
    Find your Jesus, find your Kubrick

    You will never fall apart
    Diana you're still in our hearts
    Never let you fall apart
    Together we'll dance in the dark

    Baby loves to dance in the dark
    'Cause when he's lookin' she falls apart
    Baby loves to dance in the dark, baby

    Baby loves to dance in the dark
    'Cause when he's lookin' she falls apart
    Baby loves to dance, loves to dance in the dark
    In the dark



    Oh, the disco heaven
    Oh, the disco heaven

    Get back, bunny
    It's getting cold in here little honey
    We got a show to put on your dress
    Take a minute for us and relax, relax
    Cupid's got me, oh with his bow & arrow, baby
    He'll hit you in the pants, hot pants
    Get the people to dance and relax, relax

    Oh the lights still on, we're dancing
    Yeah the floor is shaking
    In this disco heaven
    oh, the disco heaven
    The disco heaven

    oh, the disco heaven

    Oh the lights still on, we're dancing
    Yeah the floor is shaking
    In this disco heaven
    oh, the disco heaven
    The disco heaven

    oh, the disco heaven

    Throw your head back, girly
    Throw it like those girls in the movies
    We got a show to put on your dress
    Take a minute for us and relax, relax

    The ball is turning, 300 mirrors burning
    Through the hearts of the crowd
    In the back hips just banging the track
    To the music, the music

    Oh the lights still on, we're dancing
    Yeah the floor is shaking
    In this disco heaven
    oh, the disco heaven
    The disco heaven

    oh, the disco heaven

    Oh the lights still on, we're dancing



    I know that we are young
    And I know that you may love me
    But I just can't be with you like this anymore
    Alejandro

    Ohh..

    She's got both hands
    In her pockets
    And she won't look at you
    Won't look at you
    She hides through love
    en su bolsillo
    She got a halo around her finger
    Around you

    You know that I love you boy
    Hot like Mexico, rejoice
    At this point I gotta choose
    Nothing to loose

    Don't call my name
    Don't call my name, Alejandro
    I'm not your babe
    I'm not your babe, Fernando

    Don't wanna kiss, don't wanna touch
    Just smoke one cigarette more
    Don't call my name
    Don't call my name, Roberto

    Alejandro
    Alejandro
    Ale-ale-jandro
    Ale-ale-jandro

    Just stop
    Please, Just let me go
    Alejandro, Just let me go

    She's not broken
    She's just a baby
    But her boyfriend's like a dad, just like a dad
    Draw those flames that burn before him
    Now he's gonna find a fight, gonna fool the bad

    You know that I love you boy
    Hot like Mexico, rejoice
    At this point I gotta choose
    Nothing to loose

    Don't call my name
    Don't call my name, Alejandro
    I'm not your babe



    I know that we are young
    and I know that he may love me
    But I just can't be with you like this anymore

    She's got both hands in her pocket
    and she won't look at you,
    won't look at you oh

    She hides through love
    en su bolsillo
    She got a halo around her finger
    around you oh

    You know that I love you boy
    Hot like Mexico, rejoice
    At this point I gotta choose
    Nothing to loose

    Don't call my name
    Don't call my name, Alejandro
    I'm not your babe
    I'm not your babe, Fernando

    Don't wanna kiss, don't wanna touch
    Just smoke one cigarette and run.
    Don't call my name
    Don't call my name, Roberto

    Alejandro
    Alejandro
    Ale-ale-jandro
    Ale-ale-jandro


    Just stop
    Please, Just let me go Alejandro, Just let me go

    She's not broken
    She's just a baby
    But her boyfriend's like a dad, just like a dad
    Draw those flames that burn before him
    Now he's gonna find a fight, gonna fool the bad

    You know that I love you boy
    Hot like Mexico, rejoice
    At this point I gotta choose
    Nothing loose

    Don't call my name
    Don't call my name, Alejandro



    Cherry, cherry, boom, boom
    Gaga

    Boy, we've had a real good time
    And I wish you the best on your way, eh, eh
    I didn't mean to hurt you
    I never thought we'd fall out of place, eh, eh

    I have something that I love long, long
    But my friends keepa' tellin' me that something's wrong
    Then I met someone
    And eh, there's nothing else I can say

    Eh, eh, there's nothing else I can say
    Eh, eh, I wish he never looked at me that way
    Eh, eh, there's nothing else I can say
    Eh, eh

    Not that I don't care about you
    Just that things got so complique, eh, eh
    I met somebody cute and funny
    Got each other and that's funny, eh, eh, eh

    I have something that I love long, long
    But my friends keepa' tellin' me that something's wrong
    Then I met someone
    And eh, there's nothing else I can say

    Eh, eh, there's nothing else I can say
    Eh, eh, I wish he never looked at me that way
    Eh, eh, there's nothing else I can say
    Eh, eh

    I have something that I love long, long
    But my friends keepa' tellin' me that something's wrong
    Then I met someone
    And eh, there's nothing else I can say

    Eh, eh, eh, eh, eh, there's nothing else I can say
    Eh, eh, wish he never looked at me that way
    Eh, eh, there's nothing else I can say

    Eh, eh, wish he never looked at me that way
    Eh, eh, there's nothing else I can say
    Eh, eh, cherry, cherry, boom, boom

    Eh, eh
    Oh, yeah
    All I can say is, eh



    Red one, Heidi
    Oh, oh, la, la, la
    We love designer

    I am, I'm too fabulous
    I'm so fierce that it's so nuts
    I live, to be model thin
    Dress me, I'm your mannequin

    J'adore, Vivienne I really want
    Pucci, Fendi, and Cardin, Valentino, Armani too
    Madame love them Jimmy Choo

    Fashion put it all on me
    Don't you want to see these clothes on me
    Fashion put it all on me
    I am anyone you want me to be
    I am anyone you want me to be

    Oh, oh, la, la, la
    We love designer

    I need, some new stilettos
    Can't walk, down the street in those
    You are, who you wear it's true
    A girl's just as hot as the shoes she choose

    J'adore, Weitzman I really want
    Louis, Dolce Gabbana, Alexander McQueen, eh ou
    Madame love those Minolo

    Fashion put it all on me
    Don't you want to see these clothes on me
    Fashion put it all on me
    I am anyone you want me to be
    I am anyone you want me to be

    Oh, oh, la, la, la
    We love designer
    Oh, oh, la, la, la
    We love designer

    Fashion put it all on me
    Don't you want to see these clothes on me
    Fashion put it all on me
    I am anyone you want me to be

    Fashion put it all on me
    Don't you want to see these clothes on me
    Fashion put it all on me
    I am anyone you want me to be

    Fashion put it all on me
    Don't you want to see these clothes on me
    Fashion put it all on me
    I am anyone you want me to be

    Fashion put it all on me
    Don't you want to see these clothes on me
    Fashion put it all on me
    I am anyone you want me to be

    Oh, oh, la, la, la
    We love designer
    Oh, oh, la, la, la
    We love designer



    I don't know why you're hurt inside
    Or what was said to make you cry
    I hope that you can see
    You are the greatest thing to me and when
    You feel like your not enough
    I'll give you wings I'll lift you up
    I hope that you can see you are
    The greatest, greatest thing to me

    I don't wanna waste another day
    And took hand off you up in the middle of the day ?
    What I can see is you waste another day

    Cuz when Im with you I fall apart,
    I see your permanently broken heart.

    Baby, your the greatest to me,
    No, no matter what, what, what

    I don't know why you're hurt inside
    Or what was said to make you cry
    I hope that you can see you are the greatest
    Thing to me and when anekatips
    You feel like your not enough
    I'll give you wings I'll lift you up
    I hope that you can see you are the greatest
    Greatest thing to me



    RedOne, Konvict
    GaGa, oh-oh, eh

    I've had a little bit too much, much
    All of the people start to rush, start to rush by
    How does he twist the dance? Can't find a drink, oh man
    Where are my keys? I lost my phone, phone

    What's going on on the floor?
    I love this record baby but I can't see straight anymore
    Keep it cool, what's the name of this club?
    I can't remember but it's alright, a-alright

    Just dance, gonna be okay, da da doo-doo-mmm
    Just dance, spin that record babe, da da doo-doo-mmm
    Just dance, gonna be okay, d-d-d-dance
    Dance, dance, just, j-j-just dance

    Wish I could shut my playboy mouth, oh oh oh-oh
    How'd I turn my shirt inside out? Inside outright
    Control your poison babe, roses have thorns they say
    And we're all getting hosed tonight, oh oh oh-oh

    What's going on on the floor?
    I love this record baby but I can't see straight anymore
    Keep it cool, what's the name of this club?
    I can't remember but it's alright, a-alright

    Just dance, gonna be okay, da da doo-doo-mmm
    Just dance, spin that record babe, da da doo-doo-mmm
    Just dance, gonna be okay, d-d-d-dance
    Dance, dance, just, j-j-just

    When I come through on the dance floor checkin' out that catalog
    Can't believe my eyes, so many women without a flaw
    And I ain't gon' give it up, steady tryin' to pick it up like a car
    I'ma hit it, I'ma hit it and flex and do it until tomorr' yeah

    Shawty I can see that you got so much energy
    The way you're twirlin' up them hips 'round and 'round
    And now there's no reason at all why you can't leave here with me
    In the meantime stay and let me watch you break it down

    And dance, gonna be okay, da da doo-doo-mmm
    Just dance, spin that record babe, da da doo-doo-mmm

    Just dance, gonna be okay, da da doo-doo-mmm
    Just dance, spin that record babe, da da doo-doo-mmm
    Just dance, gonna be okay, d-d-d-dance
    Dance, dance, just, j-j-just dance

    Woo! Let's go!

    Half psychotic, sick, hypnotic
    Got my blueprint, it's symphonic
    Half psychotic, sick, hypnotic
    Got my blueprint electronic

    Half psychotic, sick, hypnotic
    Got my blueprint, it's symphonic
    Half psychotic, sick, hypnotic
    Got my blueprint electronic

    Go! Use your muscle, carve it out, work it, hustle
    I got it, just stay close enough to get it
    Don't slow! Drive it, clean it, lights out, bleed it
    Spend the lasto
    I got it
    In your pocko
    I got it

    Just dance, gonna be okay, da da doo-doo-mmm
    Just dance, spin that record babe, da da doo-doo-mmm

    Just dance, gonna be okay, da da doo-doo-mmm
    Just dance, spin that record babe, da da doo-doo-mmm
    Just dance, gonna be okay, d-d-d-dance
    Dance, dance, just, j-j-just dance



    We are the crowd
    We're co-coming out
    Got my flash on, it's true
    Need that picture of you

    It's so magical
    We'd be so fantastical

    Leather and jeans
    Garage glamorous
    Not sure what it means
    But this photo of us

    It don't have a price
    Ready for those flashing lights
    'Cause you know that, baby, I

    I'm your biggest fan
    I'll follow you until you love me
    Papa-paparazzi

    Baby, there's no other superstar
    You know that I'll be
    Papa-paparazzi

    Promise I'll be kind
    But I won't stop
    Until that boy is mine

    Baby, you'll be famous
    Chase you down until you love me
    Papa-paparazzi

    I'll be your girl
    Backstage at your show
    Velvet ropes and guitars
    Yeah, 'cause you know I'm starting

    Between the sets
    Eyeliner and all the rest

    Shadow is burnt
    Yellow dance in return
    My lashes are dry
    Purple teardrops I cry

    It don't have a price
    Loving you is cherry pie
    'Cause you know that, baby, I

    I'm your biggest fan
    I'll follow you until you love me
    Papa-paparazzi

    Baby, there's no other superstar
    You know that I'll be
    Papa-paparazzi

    Promise I'll be kind
    But I won't stop
    Until that boy is mine

    Baby, you'll be famous
    Chase you down until you love me
    Papa-paparazzi

    Real good
    We're dancin' in the studio
    Stop, stop
    That song on the radio

    Don't stop
    For anyone
    We're plastic but
    We'll still have fun

    I'm your biggest fan
    I'll follow you until you love me
    Papa-paparazzi

    Baby, there's no other superstar
    You know that I'll be
    Papa-paparazzi

    Promise I'll be kind
    But I won't stop
    Until that boy is mine

    Baby, you'll be famous
    Chase you down until you love me
    Papa-paparazzi



    Ow, come here boy

    I met a drummer last week
    At a pool bar, down b-by the shore
    With a body like that, and your stone washed eyes
    I want you more

    He cried, 'Mother! What'd you do to me?''
    I said, 'Mother mother mother's for babies
    Call me kitty.'

    Yeah

    Shake your kitty
    Shake your kitty meow
    Put your arms around me, babe
    I'm giving you permission to feel me

    Shake your kitty
    Shake your kitty meow
    Put your arms around me, babe
    I'm giving you permission to feel me

    Shake your shake
    Shake shake
    Shake your sh-shake
    Shake it, shake it
    Shake it, shake it
    Shake it, shake

    I took a drummer by the hand
    To the juke box then
    We hit the floor
    With your Van Halen pin
    And your dark side burns
    I want you more

    He cried, 'Mother! What'd you do to me?''
    I said, 'Mother mother mother's for babies
    Call me kitty.'

    Oh, why dontcha

    Shake your kitty
    Shake your kitty meow
    Put your arms around me, babe
    I'm giving you permission to feel me

    Shake your kitty
    Shake your kitty meow
    Put your arms around me, babe
    I'm giving you permission to feel me

    You never call me by my name
    But I still want you
    You play some pretty tricky games
    But I still want you
    Your best friend drives a fancy car
    But I still want you
    You're working every hour
    But, but I still want you yeah!

    If you see a girl this pretty
    Shake her, shake her, shake that kitty
    When you see a girl that's pretty
    Shake it, shake it, shake that kitty

    Shake your kitty meow
    Put your arms around me, babe
    I'm giving you permission to feel me

    Shake your kitty
    Why don't you
    Shake your kitty meow
    Put your arms around me, babe
    I'm giving you permission to feel me

    Uh,uh,oh
    When you see a girl this pretty
    Shake her, shake her, shake her kitty
    When you see a girl that's pretty
    Shake your, shake your, shake that kitty

    Shake it, shake
    Shake it, shake
    Shake it, shake
    Meow!
    Uh-ah,uhh-aww
    C'mon and shake your kitty
    You're so pretty kitty";



  }
?>
