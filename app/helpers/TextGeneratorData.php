<?php

namespace App\Helpers;

  /* Define strings of text containing works to be used as the basis to generate nGrams*/

class TextGeneratorData{


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

";

  }
?>
