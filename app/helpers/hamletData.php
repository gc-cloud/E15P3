<?php

namespace App\Helpers;

  /* Define strings of text containing works to be used as the basis to generate nGrams*/

class HamletData{

  static $hamlet = "
    SCENE.- Elsinore.


    ACT I. Scene I.
    Elsinore. A platform before the Castle.

    Enter two Sentinels-[first,] Francisco, [who paces up and down
    at his post; then] Bernardo, [who approaches him].

      Ber. Who's there.?
      Fran. Nay, answer me. Stand and unfold yourself.
      Ber. Long live the King!
      Fran. Bernardo?
      Ber. He.
      Fran. You come most carefully upon your hour.
      Ber. 'Tis now struck twelve. Get thee to bed, Francisco.
      Fran. For this relief much thanks. 'Tis bitter cold,
        And I am sick at heart.
      Ber. Have you had quiet guard?
      Fran. Not a mouse stirring.
      Ber. Well, good night.
        If you do meet Horatio and Marcellus,
        The rivals of my watch, bid them make haste.

                        Enter Horatio and Marcellus.

      Fran. I think I hear them. Stand, ho! Who is there?
      Hor. Friends to this ground.
      Mar. And liegemen to the Dane.
      Fran. Give you good night.
      Mar. O, farewell, honest soldier.
        Who hath reliev'd you?
      Fran. Bernardo hath my place.
        Give you good night.                                   Exit.
      Mar. Holla, Bernardo!
      Ber. Say-
        What, is Horatio there ?
      Hor. A piece of him.
      Ber. Welcome, Horatio. Welcome, good Marcellus.
      Mar. What, has this thing appear'd again to-night?
      Ber. I have seen nothing.
      Mar. Horatio says 'tis but our fantasy,
        And will not let belief take hold of him
        Touching this dreaded sight, twice seen of us.
        Therefore I have entreated him along,
        With us to watch the minutes of this night,
        That, if again this apparition come,
        He may approve our eyes and speak to it.
      Hor. Tush, tush, 'twill not appear.
      Ber. Sit down awhile,
        And let us once again assail your ears,
        That are so fortified against our story,
        What we two nights have seen.
      Hor. Well, sit we down,
        And let us hear Bernardo speak of this.
      Ber. Last night of all,
        When yond same star that's westward from the pole
        Had made his course t' illume that part of heaven
        Where now it burns, Marcellus and myself,
        The bell then beating one-

                            Enter Ghost.

      Mar. Peace! break thee off! Look where it comes again!
      Ber. In the same figure, like the King that's dead.
      Mar. Thou art a scholar; speak to it, Horatio.
      Ber. Looks it not like the King? Mark it, Horatio.
      Hor. Most like. It harrows me with fear and wonder.
      Ber. It would be spoke to.
      Mar. Question it, Horatio.
      Hor. What art thou that usurp'st this time of night
        Together with that fair and warlike form
        In which the majesty of buried Denmark
        Did sometimes march? By heaven I charge thee speak!
      Mar. It is offended.
      Ber. See, it stalks away!
      Hor. Stay! Speak, speak! I charge thee speak!
                                                         Exit Ghost.
      Mar. 'Tis gone and will not answer.
      Ber. How now, Horatio? You tremble and look pale.
        Is not this something more than fantasy?
        What think you on't?
      Hor. Before my God, I might not this believe
        Without the sensible and true avouch
        Of mine own eyes.
      Mar. Is it not like the King?
      Hor. As thou art to thyself.
        Such was the very armour he had on
        When he th' ambitious Norway combated.
        So frown'd he once when, in an angry parle,
        He smote the sledded Polacks on the ice.
        'Tis strange.
      Mar. Thus twice before, and jump at this dead hour,
        With martial stalk hath he gone by our watch.
      Hor. In what particular thought to work I know not;
        But, in the gross and scope of my opinion,
        This bodes some strange eruption to our state.
      Mar. Good now, sit down, and tell me he that knows,
        Why this same strict and most observant watch
        So nightly toils the subject of the land,
        And why such daily cast of brazen cannon
        And foreign mart for implements of war;
        Why such impress of shipwrights, whose sore task
        Does not divide the Sunday from the week.
        What might be toward, that this sweaty haste
        Doth make the night joint-labourer with the day?
        Who is't that can inform me?
      Hor. That can I.
        At least, the whisper goes so. Our last king,
        Whose image even but now appear'd to us,
        Was, as you know, by Fortinbras of Norway,
        Thereto prick'd on by a most emulate pride,
        Dar'd to the combat; in which our valiant Hamlet
        (For so this side of our known world esteem'd him)
        Did slay this Fortinbras; who, by a seal'd compact,
        Well ratified by law and heraldry,
        Did forfeit, with his life, all those his lands
        Which he stood seiz'd of, to the conqueror;
        Against the which a moiety competent
        Was gaged by our king; which had return'd
        To the inheritance of Fortinbras,
        Had he been vanquisher, as, by the same comart
        And carriage of the article design'd,
        His fell to Hamlet. Now, sir, young Fortinbras,
        Of unimproved mettle hot and full,
        Hath in the skirts of Norway, here and there,
        Shark'd up a list of lawless resolutes,
        For food and diet, to some enterprise
        That hath a stomach in't; which is no other,
        As it doth well appear unto our state,
        But to recover of us, by strong hand
        And terms compulsatory, those foresaid lands
        So by his father lost; and this, I take it,
        Is the main motive of our preparations,
        The source of this our watch, and the chief head
        Of this post-haste and romage in the land.
      Ber. I think it be no other but e'en so.
        Well may it sort that this portentous figure
        Comes armed through our watch, so like the King
        That was and is the question of these wars.
      Hor. A mote it is to trouble the mind's eye.
        In the most high and palmy state of Rome,
        A little ere the mightiest Julius fell,
        The graves stood tenantless, and the sheeted dead
        Did squeak and gibber in the Roman streets;
        As stars with trains of fire, and dews of blood,
        Disasters in the sun; and the moist star
        Upon whose influence Neptune's empire stands
        Was sick almost to doomsday with eclipse.
        And even the like precurse of fierce events,
        As harbingers preceding still the fates
        And prologue to the omen coming on,
        Have heaven and earth together demonstrated
        Unto our climature and countrymen.

                          Enter Ghost again.

        But soft! behold! Lo, where it comes again!
        I'll cross it, though it blast me.- Stay illusion!
                                                   Spreads his arms.
        If thou hast any sound, or use of voice,
        Speak to me.
        If there be any good thing to be done,
        That may to thee do ease, and, race to me,
        Speak to me.
        If thou art privy to thy country's fate,
        Which happily foreknowing may avoid,
        O, speak!
        Or if thou hast uphoarded in thy life
        Extorted treasure in the womb of earth
        (For which, they say, you spirits oft walk in death),
                                                     The cock crows.
        Speak of it! Stay, and speak!- Stop it, Marcellus!
      Mar. Shall I strike at it with my partisan?
      Hor. Do, if it will not stand.
      Ber. 'Tis here!
      Hor. 'Tis here!
      Mar. 'Tis gone!
                                                         Exit Ghost.
        We do it wrong, being so majestical,
        To offer it the show of violence;
        For it is as the air, invulnerable,
        And our vain blows malicious mockery.
      Ber. It was about to speak, when the cock crew.
      Hor. And then it started, like a guilty thing
        Upon a fearful summons. I have heard
        The cock, that is the trumpet to the morn,
        Doth with his lofty and shrill-sounding throat
        Awake the god of day; and at his warning,
        Whether in sea or fire, in earth or air,
        Th' extravagant and erring spirit hies
        To his confine; and of the truth herein
        This present object made probation.
      Mar. It faded on the crowing of the cock.
        Some say that ever, 'gainst that season comes
        Wherein our Saviour's birth is celebrated,
        The bird of dawning singeth all night long;
        And then, they say, no spirit dare stir abroad,
        The nights are wholesome, then no planets strike,
        No fairy takes, nor witch hath power to charm,
        So hallow'd and so gracious is the time.
      Hor. So have I heard and do in part believe it.
        But look, the morn, in russet mantle clad,
        Walks o'er the dew of yon high eastward hill.
        Break we our watch up; and by my advice
        Let us impart what we have seen to-night
        Unto young Hamlet; for, upon my life,
        This spirit, dumb to us, will speak to him.
        Do you consent we shall acquaint him with it,
        As needful in our loves, fitting our duty?
        Let's do't, I pray; and I this morning know
        Where we shall find him most conveniently.           Exeunt.




    Scene II.
    Elsinore. A room of state in the Castle.

    Flourish. [Enter Claudius, King of Denmark, Gertrude the Queen, Hamlet,
    Polonius, Laertes and his sister Ophelia, [Voltemand, Cornelius,]
    Lords Attendant.

      King. Though yet of Hamlet our dear brother's death
        The memory be green, and that it us befitted
        To bear our hearts in grief, and our whole kingdom
        To be contracted in one brow of woe,
        Yet so far hath discretion fought with nature
        That we with wisest sorrow think on him
        Together with remembrance of ourselves.
        Therefore our sometime sister, now our queen,
        Th' imperial jointress to this warlike state,
        Have we, as 'twere with a defeated joy,
        With an auspicious, and a dropping eye,
        With mirth in funeral, and with dirge in marriage,
        In equal scale weighing delight and dole,
        Taken to wife; nor have we herein barr'd
        Your better wisdoms, which have freely gone
        With this affair along. For all, our thanks.
        Now follows, that you know, young Fortinbras,
        Holding a weak supposal of our worth,
        Or thinking by our late dear brother's death
        Our state to be disjoint and out of frame,
        Colleagued with this dream of his advantage,
        He hath not fail'd to pester us with message
        Importing the surrender of those lands
        Lost by his father, with all bands of law,
        To our most valiant brother. So much for him.
        Now for ourself and for this time of meeting.
        Thus much the business is: we have here writ
        To Norway, uncle of young Fortinbras,
        Who, impotent and bedrid, scarcely hears
        Of this his nephew's purpose, to suppress
        His further gait herein, in that the levies,
        The lists, and full proportions are all made
        Out of his subject; and we here dispatch
        You, good Cornelius, and you, Voltemand,
        For bearers of this greeting to old Norway,
        Giving to you no further personal power
        To business with the King, more than the scope
        Of these dilated articles allow.            [Gives a paper.]
        Farewell, and let your haste commend your duty.
      Cor., Volt. In that, and all things, will we show our duty.
      King. We doubt it nothing. Heartily farewell.
                                     Exeunt Voltemand and Cornelius.
        And now, Laertes, what's the news with you?
        You told us of some suit. What is't, Laertes?
        You cannot speak of reason to the Dane
        And lose your voice. What wouldst thou beg, Laertes,
        That shall not be my offer, not thy asking?
        The head is not more native to the heart,
        The hand more instrumental to the mouth,
        Than is the throne of Denmark to thy father.
        What wouldst thou have, Laertes?
      Laer. My dread lord,
        Your leave and favour to return to France;
        From whence though willingly I came to Denmark
        To show my duty in your coronation,
        Yet now I must confess, that duty done,
        My thoughts and wishes bend again toward France
        And bow them to your gracious leave and pardon.
      King. Have you your father's leave? What says Polonius?
      Pol. He hath, my lord, wrung from me my slow leave
        By laboursome petition, and at last
        Upon his will I seal'd my hard consent.
        I do beseech you give him leave to go.
      King. Take thy fair hour, Laertes. Time be thine,
        And thy best graces spend it at thy will!
        But now, my cousin Hamlet, and my son-
      Ham. [aside] A little more than kin, and less than kind!
      King. How is it that the clouds still hang on you?
      Ham. Not so, my lord. I am too much i' th' sun.
      Queen. Good Hamlet, cast thy nighted colour off,
        And let thine eye look like a friend on Denmark.
        Do not for ever with thy vailed lids
        Seek for thy noble father in the dust.
        Thou know'st 'tis common. All that lives must die,
        Passing through nature to eternity.
      Ham. Ay, madam, it is common.
      Queen. If it be,
        Why seems it so particular with thee?
      Ham. Seems, madam, Nay, it is. I know not 'seems.'
        'Tis not alone my inky cloak, good mother,
        Nor customary suits of solemn black,
        Nor windy suspiration of forc'd breath,
        No, nor the fruitful river in the eye,
        Nor the dejected havior of the visage,
        Together with all forms, moods, shapes of grief,
        'That can denote me truly. These indeed seem,
        For they are actions that a man might play;
        But I have that within which passeth show-
        These but the trappings and the suits of woe.
      King. 'Tis sweet and commendable in your nature, Hamlet,
        To give these mourning duties to your father;
        But you must know, your father lost a father;
        That father lost, lost his, and the survivor bound
        In filial obligation for some term
        To do obsequious sorrow. But to persever
        In obstinate condolement is a course
        Of impious stubbornness. 'Tis unmanly grief;
        It shows a will most incorrect to heaven,
        A heart unfortified, a mind impatient,
        An understanding simple and unschool'd;
        For what we know must be, and is as common
        As any the most vulgar thing to sense,
        Why should we in our peevish opposition
        Take it to heart? Fie! 'tis a fault to heaven,
        A fault against the dead, a fault to nature,
        To reason most absurd, whose common theme
        Is death of fathers, and who still hath cried,
        From the first corse till he that died to-day,
        'This must be so.' We pray you throw to earth
        This unprevailing woe, and think of us
        As of a father; for let the world take note
        You are the most immediate to our throne,
        And with no less nobility of love
        Than that which dearest father bears his son
        Do I impart toward you. For your intent
        In going back to school in Wittenberg,
        It is most retrograde to our desire;
        And we beseech you, bend you to remain
        Here in the cheer and comfort of our eye,
        Our chiefest courtier, cousin, and our son.
      Queen. Let not thy mother lose her prayers, Hamlet.
        I pray thee stay with us, go not to Wittenberg.
      Ham. I shall in all my best obey you, madam.
      King. Why, 'tis a loving and a fair reply.
        Be as ourself in Denmark. Madam, come.
        This gentle and unforc'd accord of Hamlet
        Sits smiling to my heart; in grace whereof,
        No jocund health that Denmark drinks to-day
        But the great cannon to the clouds shall tell,
        And the King's rouse the heaven shall bruit again,
        Respeaking earthly thunder. Come away.
                                    Flourish. Exeunt all but Hamlet.
      Ham. O that this too too solid flesh would melt,
        Thaw, and resolve itself into a dew!
        Or that the Everlasting had not fix'd
        His canon 'gainst self-slaughter! O God! God!
        How weary, stale, flat, and unprofitable
        Seem to me all the uses of this world!
        Fie on't! ah, fie! 'Tis an unweeded garden
        That grows to seed; things rank and gross in nature
        Possess it merely. That it should come to this!
        But two months dead! Nay, not so much, not two.
        So excellent a king, that was to this
        Hyperion to a satyr; so loving to my mother
        That he might not beteem the winds of heaven
        Visit her face too roughly. Heaven and earth!
        Must I remember? Why, she would hang on him
        As if increase of appetite had grown
        By what it fed on; and yet, within a month-
        Let me not think on't! Frailty, thy name is woman!-
        A little month, or ere those shoes were old
        With which she followed my poor father's body
        Like Niobe, all tears- why she, even she
        (O God! a beast that wants discourse of reason
        Would have mourn'd longer) married with my uncle;
        My father's brother, but no more like my father
        Than I to Hercules. Within a month,
        Ere yet the salt of most unrighteous tears
        Had left the flushing in her galled eyes,
        She married. O, most wicked speed, to post
        With such dexterity to incestuous sheets!
        It is not, nor it cannot come to good.
        But break my heart, for I must hold my tongue!

              Enter Horatio, Marcellus, and Bernardo.

      Hor. Hail to your lordship!
      Ham. I am glad to see you well.
        Horatio!- or I do forget myself.
      Hor. The same, my lord, and your poor servant ever.
      Ham. Sir, my good friend- I'll change that name with you.
        And what make you from Wittenberg, Horatio?
        Marcellus?
      Mar. My good lord!
      Ham. I am very glad to see you.- [To Bernardo] Good even, sir.-
        But what, in faith, make you from Wittenberg?
      Hor. A truant disposition, good my lord.
      Ham. I would not hear your enemy say so,
        Nor shall you do my ear that violence
        To make it truster of your own report
        Against yourself. I know you are no truant.
        But what is your affair in Elsinore?
        We'll teach you to drink deep ere you depart.
      Hor. My lord, I came to see your father's funeral.
      Ham. I prithee do not mock me, fellow student.
        I think it was to see my mother's wedding.
      Hor. Indeed, my lord, it followed hard upon.
      Ham. Thrift, thrift, Horatio! The funeral bak'd meats
        Did coldly furnish forth the marriage tables.
        Would I had met my dearest foe in heaven
        Or ever I had seen that day, Horatio!
        My father- methinks I see my father.
      Hor. O, where, my lord?
      Ham. In my mind's eye, Horatio.
      Hor. I saw him once. He was a goodly king.
      Ham. He was a man, take him for all in all.
        I shall not look upon his like again.
      Hor. My lord, I think I saw him yesternight.
      Ham. Saw? who?
      Hor. My lord, the King your father.
      Ham. The King my father?
      Hor. Season your admiration for a while
        With an attent ear, till I may deliver
        Upon the witness of these gentlemen,
        This marvel to you.
      Ham. For God's love let me hear!
      Hor. Two nights together had these gentlemen
        (Marcellus and Bernardo) on their watch
        In the dead vast and middle of the night
        Been thus encount'red. A figure like your father,
        Armed at point exactly, cap-a-pes.";
  }
?>
