# OOP-with-PHP

## include and required difference

| Feature              | `include`                            | `require`                                      |
| :------------------- | :----------------------------------- | :--------------------------------------------- |
| **Failure Severity** | Produces a **Warning** (`E_WARNING`) | Produces a **Fatal Error** (`E_COMPILE_ERROR`) |
| **Script Execution** | The script **continues** to run      | The script **stops** immediately               |
| **Best Use Case**    | Non-critical files (footer, sidebar) | Critical files (Classes, Database config)      |

---

### Key Takeaway

In OOP, always prefer `require_once` for loading class files. This ensures the script stops if a class is missing and prevents "Cannot redeclare class" errors if the file is accidentally loaded twice.

## Abstract Class

Think of an `Abstract Class` as a `"half-finished"` blueprint. It’s a class that defines a base structure but cannot be used to create an object directly.

In your index.php, if you try to do `$test = new ParentClass();` and that class is abstract, PHP will throw an error. It exists solely to be inherited by other classes.

### Why use an Abstract Class?

Imagine you are building a game with different animals: Dog, Cat, and Bird.
All animals eat and make a sound. However, there is no such thing as a "generic animal" in the real world—it's always a specific type.

You use an Abstract Class to force every animal to have a makeSound() method.

But, since every animal sounds different, you leave the "how" up to the child class.

### The Rules of Abstract Classes

- No Instantiation: You cannot do new AbstractClassName().

- Abstract Methods: If a class contains at least one abstract method, the class itself must be declared abstract.

- The Contract: If a child class inherits an abstract class, it must define all the abstract methods, or it must also be declared abstract.

- Visibility: The signature (arguments) of the method in the child must match the parent.


## What is a Value Object?
A Value Object is a small object that represents a simple entity whose identity is defined by its value, not a unique ID.

- `Entity` (Not a Value Object): A User. If a user changes their name, they are still the same person (same ID).

- `Value` `Object`: An Address or Money. If you change "$5" to "$10", it’s no longer the same "thing." It’s a completely different value.
