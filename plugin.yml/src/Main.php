name: KnockBack
author: rezex._.
version: 1.1.0
api: [3.0.0]
main: \GameManager\Main
commands: 
    games:
      description: "By rezex._."
      usage: "/kn [game]"
      permission: gamemanager.true
permissions:
    gamemanager.true:
      default: true
    gamemanager.op:
      default: op
    gamemanager.false:
      default: false
    gamemanager.notop:
      default: !op
...
