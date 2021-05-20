Action Abstraction
==================
This is an attempt to create an abstracted interface for code that is intended to do stuff e.g. event handling code.
The goal is to create a generic but statically typed interface for handling actions in the way generics may do so in 
other programming languages. 

## Use case
This code may be useful in a domain driven architecture or any other situation with the prerequisite that the context 
of a certain piece of logic is clear up front as is the case for instance with generated code. This implementation 
allows the user to configure or tweak business logic with the certainty that noting breaks.

## Usage (implementation side)
By extending ActionRunner and overwriting the setData and getData arguments and return types you effectively alter the 
input and output of the whole library. 


```
public function getActionRunner():ActionRunnerInterface {

    return new class extends ActionRunner {

        public function setData(YourType $oData)
        {
        
        }
        public function getData():YourType {

        }
    }

}
```
# Components

## Action
The action is the handler that performs the thing that the action is intended to do.

## ActionSetup
Contains for instance the parameters for connecting to an SMTP server.

## ActionConfig
Holds static properties that are required for this specific use case of the action. An example for this would be a
html template that will be parsed.

## ActionParams
These are the parameters that belong to this specific instance of the action

# Generics
Php does not support generics but i wanted this whole thing to be statically typed and give compile errors when 
something is wrong. To implement this the user needs to extend the ActionRunner class and override the setData and
getData methods with the appropriate type. For example:

