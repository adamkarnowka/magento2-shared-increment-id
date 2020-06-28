# Introduction

This simple extension makes it easy to have global incrementation for selected entities.

Instead of this:

|  New order | Storeview A| Storeview B  |   
|---|---|---|
| Placed in A  | #1000000   |   |   
| Placed in A  | #1000001   |   |   
| Placed in B  |   | #1000000   |   
| Placed in A  | #1000002   |   |   
| Placed in B  |    | #1000001  |   

You will have this:

|  New order | Storeview A| Storeview B  |   
|---|---|---|
| Placed in A  | #1000000   |   |   
| Placed in A  | #1000001   |   |   
| Placed in B  |   | #1000002   |   
| Placed in A  | #1000003   |   |   
| Placed in B  |    | #1000004  |   
