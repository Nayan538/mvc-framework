## Core PHP MVC Framework


```
├───app
│   ├───Eloquent
│   ├───Http
│   │   ├───Controllers
│   │   └───Core
│   └───Models
├───bootstrap
├───component
├───config
├───public
│   ├───css
│   ├───fonts
│   ├───images
│   ├───js
│   └───plugins
├───resource
│   ├───@schema
│   ├───backup
│   └───view
│       ├───content
│       └───include
├───storage
├───tests
│   ├───Feature
│   └───Unit
└───vendor
    ├───bin
    ├───composer
    ├───doctrine
    │   └───instantiator
    │       ├───.github
    │       │   └───workflows
    │       ├───docs
    │       │   └───en
    │       └───src
    │           └───Doctrine
    │               └───Instantiator
    │                   └───Exception
    ├───myclabs
    │   └───deep-copy
    │       ├───.github
    │       └───src
    │           └───DeepCopy
    │               ├───Exception
    │               ├───Filter
    │               │   └───Doctrine
    │               ├───Matcher
    │               │   └───Doctrine
    │               ├───Reflection
    │               ├───TypeFilter
    │               │   ├───Date
    │               │   └───Spl
    │               └───TypeMatcher
    ├───nikic
    │   └───php-parser
    │       ├───bin
    │       ├───grammar
    │       └───lib
    │           └───PhpParser
    │               ├───Builder
    │               ├───Comment
    │               ├───ErrorHandler
    │               ├───Internal
    │               ├───Lexer
    │               │   └───TokenEmulator
    │               ├───Node
    │               │   ├───Expr
    │               │   │   ├───AssignOp
    │               │   │   ├───BinaryOp
    │               │   │   └───Cast
    │               │   ├───Name
    │               │   ├───Scalar
    │               │   │   └───MagicConst
    │               │   └───Stmt
    │               │       └───TraitUseAdaptation
    │               ├───NodeVisitor
    │               ├───Parser
    │               └───PrettyPrinter
    ├───phar-io
    │   ├───manifest
    │   │   └───src
    │   │       ├───exceptions
    │   │       ├───values
    │   │       └───xml
    │   └───version
    │       └───src
    │           ├───constraints
    │           └───exceptions
    ├───phpdocumentor
    │   ├───reflection-common
    │   │   ├───.github
    │   │   │   └───workflows
    │   │   └───src
    │   ├───reflection-docblock
    │   │   └───src
    │   │       ├───DocBlock
    │   │       │   └───Tags
    │   │       │       ├───Factory
    │   │       │       ├───Formatter
    │   │       │       └───Reference
    │   │       └───Exception
    │   └───type-resolver
    │       └───src
    │           ├───PseudoTypes
    │           └───Types
    ├───phpspec
    │   └───prophecy
    │       └───src
    │           └───Prophecy
    │               ├───Argument
    │               │   └───Token
    │               ├───Call
    │               ├───Comparator
    │               ├───Doubler
    │               │   ├───ClassPatch
    │               │   └───Generator
    │               │       └───Node
    │               ├───Exception
    │               │   ├───Call
    │               │   ├───Doubler
    │               │   ├───Prediction
    │               │   └───Prophecy
    │               ├───PhpDocumentor
    │               ├───Prediction
    │               ├───Promise
    │               ├───Prophecy
    │               └───Util
    ├───phpunit
    │   ├───php-code-coverage
    │   │   └───src
    │   │       ├───Driver
    │   │       ├───Exception
    │   │       ├───Node
    │   │       ├───Report
    │   │       │   ├───Html
    │   │       │   │   └───Renderer
    │   │       │   │       └───Template
    │   │       │   │           ├───css
    │   │       │   │           ├───icons
    │   │       │   │           └───js
    │   │       │   └───Xml
    │   │       └───StaticAnalysis
    │   ├───php-file-iterator
    │   │   └───src
    │   ├───php-invoker
    │   │   └───src
    │   │       └───exceptions
    │   ├───php-text-template
    │   │   ├───.psalm
    │   │   └───src
    │   │       └───exceptions
    │   ├───php-timer
    │   │   ├───.psalm
    │   │   └───src
    │   │       └───exceptions
    │   └───phpunit
    │       ├───schema
    │       └───src
    │           ├───Framework
    │           │   ├───Assert
    │           │   ├───Constraint
    │           │   │   ├───Boolean
    │           │   │   ├───Cardinality
    │           │   │   ├───Equality
    │           │   │   ├───Exception
    │           │   │   ├───Filesystem
    │           │   │   ├───Math
    │           │   │   ├───Object
    │           │   │   ├───Operator
    │           │   │   ├───String
    │           │   │   ├───Traversable
    │           │   │   └───Type
    │           │   ├───Error
    │           │   ├───Exception
    │           │   └───MockObject
    │           │       ├───Api
    │           │       ├───Builder
    │           │       ├───Exception
    │           │       ├───Generator
    │           │       ├───Rule
    │           │       └───Stub
    │           ├───Runner
    │           │   ├───Filter
    │           │   └───Hook
    │           ├───TextUI
    │           │   ├───CliArguments
    │           │   └───XmlConfiguration
    │           │       ├───CodeCoverage
    │           │       │   ├───Filter
    │           │       │   └───Report
    │           │       ├───Filesystem
    │           │       ├───Group
    │           │       ├───Logging
    │           │       │   └───TestDox
    │           │       ├───Migration
    │           │       │   └───Migrations
    │           │       ├───PHP
    │           │       ├───PHPUnit
    │           │       └───TestSuite
    │           └───Util
    │               ├───Annotation
    │               ├───Log
    │               ├───PHP
    │               │   └───Template
    │               ├───TestDox
    │               └───Xml
    ├───sebastian
    │   ├───code-unit
    │   │   ├───.psalm
    │   │   └───src
    │   │       └───exceptions
    │   ├───code-unit-reverse-lookup
    │   │   └───src
    │   ├───comparator
    │   │   └───src
    │   │       └───exceptions
    │   ├───complexity
    │   │   ├───.psalm
    │   │   └───src
    │   │       ├───Complexity
    │   │       ├───Exception
    │   │       └───Visitor
    │   ├───diff
    │   │   └───src
    │   │       ├───Exception
    │   │       └───Output
    │   ├───environment
    │   │   └───src
    │   ├───exporter
    │   │   └───src
    │   ├───global-state
    │   │   └───src
    │   │       └───exceptions
    │   ├───lines-of-code
    │   │   ├───.psalm
    │   │   └───src
    │   │       └───Exception
    │   ├───object-enumerator
    │   │   ├───.psalm
    │   │   └───src
    │   ├───object-reflector
    │   │   ├───.psalm
    │   │   └───src
    │   ├───recursion-context
    │   │   ├───.psalm
    │   │   └───src
    │   ├───resource-operations
    │   │   ├───build
    │   │   └───src
    │   ├───type
    │   │   └───src
    │   │       └───exception
    │   └───version
    │       └───src
    ├───symfony
    │   └───polyfill-ctype
    ├───theseer
    │   └───tokenizer
    │       └───src
    └───webmozart
        └───assert
            ├───.github
            │   └───workflows
            └───src
```
