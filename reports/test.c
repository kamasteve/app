Task-2
C code
#include <hidef.h>             /* common defines and macros */
#include "derivative.h"      /* derivative-specific definitions */


void MSDelay(unsigned int);
void main() 

{ 
  
   char c[9]={-4,-3,-2,-1,0,1,2,3,4};
   int i;  

    DDRB = 0xFF;    //PORTB as output since LEDs are connected to it
    DDRJ = 0xFF;    //PTJ as output to control Dragon12+ LEDs
    PTJ=0x0;        //Allow the LEDs to display data on PORTB pins
    for(;;)
    {
      for (i=0;i<9;i++)
     			
      {
        PORTB = c[i];
        MSDelay(500);
      }
    }
        //MSDelay(2000);
}

//millisecond delay for XTAL=8MHz, PLL=48MHz
//The HCS12 Serial Monitor is used to download and  the program.
//Serial Monitor uses PLL=48MHz

 void MSDelay(unsigned int itime)
  {
    unsigned int i; unsigned int j;
    for(i=0;i<itime;i++)
      for(j=0;j<4000;j++);    //1 msec. tested using Scope
  }
Assembly
*** EVALUATION ***
ANSI-C/cC++ Compiler for HC12 V-5.0.41 Build 10203, Jul 23 2010

    1:  #include <hidef.h>      /* common defines and macros */
    2:  #include "derivative.h"      /* derivative-specific definitions */
    3:  
    4:  
    5:  void MSDelay(unsigned int);
    6:  void main() 
    7:  
    8:  { 
*** EVALUATION ***

Function: main
Source  : C:\Users\ecelab\Desktop\lab 3 task1\Sources\main.c
Options : -CPUHCS12 -D__NO_FLOAT__ -Env"GENPATH=C:\Users\ecelab\Desktop\lab 3 task1;C:\Users\ecelab\Desktop\lab 3 task1\bin;C:\Users\ecelab\Desktop\lab 3 task1\prm;C:\Users\ecelab\Desktop\lab 3 task1\cmd;C:\Users\ecelab\Desktop\lab 3 task1\Sources;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\lib;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\src;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -Env"LIBPATH=C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -Env"OBJPATH=C:\Users\ecelab\Desktop\lab 3 task1\bin" -Env"TEXTPATH=C:\Users\ecelab\Desktop\lab 3 task1\bin" -Lasm="C:\Users\ecelab\Desktop\lab 3 task1\lab_3_task1_Data\Standard\ObjectCode\main.c.o.lst" -Mb -ObjN="C:\Users\ecelab\Desktop\lab 3 task1\lab_3_task1_Data\Standard\ObjectCode\main.c.o" -WmsgSd1106

  0000 1b95         [2]     LEAS  -11,SP
    9:    
   10:     char c[9]={-4,-3,-2,-1,0,1,2,3,4};
  0002 ccfffc       [2]     LDD   #65532
  0005 6b80         [2]     STAB  0,SP
  0007 52           [1]     INCB  
  0008 6b81         [2]     STAB  1,SP
  000a 57           [1]     ASRB  
  000b 6b82         [2]     STAB  2,SP
  000d 57           [1]     ASRB  
  000e 6b83         [2]     STAB  3,SP
  0010 6984         [2]     CLR   4,SP
  0012 50           [1]     NEGB  
  0013 6b85         [2]     STAB  5,SP
  0015 58           [1]     LSLB  
  0016 6b86         [2]     STAB  6,SP
  0018 52           [1]     INCB  
  0019 6b87         [2]     STAB  7,SP
  001b 52           [1]     INCB  
  001c 6b88         [2]     STAB  8,SP
   11:     int i;  
   12:  
   13:      DDRB = 0xFF;    //PORTB as output since LEDs are connected to it
  001e 5a00         [2]     STAA  _DDRAB:1
   14:      DDRJ = 0xFF;    //PTJ as output to control Dragon12+ LEDs
  0020 7a0000       [3]     STAA  _DDRJ
   15:      PTJ=0x0;        //Allow the LEDs to display data on PORTB pins
  0023 790000       [3]     CLR   _PTJ
   16:      for(;;)
   17:      {
   18:        for (i=0;i<9;i++)
  0026 c7           [1]     CLRB  
  0027 87           [1]     CLRA  
  0028 6c89         [2]     STD   9,SP
   19:       			
   20:        {
   21:          PORTB = c[i];
  002a b774         [1]     TFR   SP,D
  002c e389         [3]     ADDD  9,SP
  002e b745         [1]     TFR   D,X
  0030 e600         [3]     LDAB  0,X
  0032 5b00         [2]     STAB  _PORTAB:1
   22:          MSDelay(500);
  0034 cc01f4       [2]     LDD   #500
  0037 4a000000     [7]     CALL  MSDelay,PAGE(MSDelay)
  003b ee89         [3]     LDX   9,SP
  003d 08           [1]     INX   
  003e 6e89         [2]     STX   9,SP
  0040 8e0009       [2]     CPX   #9
  0043 2de5         [3/1]   BLT   *-25 ;abs = 002a
  0045 20df         [3]     BRA   *-31 ;abs = 0026
   23:        }
   24:      }
   25:          //MSDelay(2000);
   26:  }
   27:  
   28:  //millisecond delay for XTAL=8MHz, PLL=48MHz
   29:  //The HCS12 Serial Monitor is used to download and  the program.
   30:  //Serial Monitor uses PLL=48MHz
   31:  
   32:   void MSDelay(unsigned int itime)
   33:    {
*** EVALUATION ***

Function: MSDelay
Source  : C:\Users\ecelab\Desktop\lab 3 task1\Sources\main.c
Options : -CPUHCS12 -D__NO_FLOAT__ -Env"GENPATH=C:\Users\ecelab\Desktop\lab 3 task1;C:\Users\ecelab\Desktop\lab 3 task1\bin;C:\Users\ecelab\Desktop\lab 3 task1\prm;C:\Users\ecelab\Desktop\lab 3 task1\cmd;C:\Users\ecelab\Desktop\lab 3 task1\Sources;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\lib;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\src;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -Env"LIBPATH=C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -Env"OBJPATH=C:\Users\ecelab\Desktop\lab 3 task1\bin" -Env"TEXTPATH=C:\Users\ecelab\Desktop\lab 3 task1\bin" -Lasm="C:\Users\ecelab\Desktop\lab 3 task1\lab_3_task1_Data\Standard\ObjectCode\main.c.o.lst" -Mb -ObjN="C:\Users\ecelab\Desktop\lab 3 task1\lab_3_task1_Data\Standard\ObjectCode\main.c.o" -WmsgSd1106

  0000 6cac         [2]     STD   4,-SP
   34:      unsigned int i; unsigned int j;
   35:      for(i=0;i<itime;i++)
  0002 c7           [1]     CLRB  
  0003 87           [1]     CLRA  
  0004 6c82         [2]     STD   2,SP
  0006 200e         [3]     BRA   *+16 ;abs = 0016
   36:        for(j=0;j<4000;j++);    //1 msec. tested using Scope
  0008 ce0000       [2]     LDX   #0
  000b 08           [1]     INX   
  000c 8e0fa0       [2]     CPX   #4000
  000f 25fa         [3/1]   BCS   *-4 ;abs = 000b
  0011 ee82         [3]     LDX   2,SP
  0013 08           [1]     INX   
  0014 6e82         [2]     STX   2,SP
  0016 ec82         [3]     LDD   2,SP
  0018 ac80         [3]     CPD   0,SP
  001a 25ec         [3/1]   BCS   *-18 ;abs = 0008
   37:    }
  001c 1b84         [2]     LEAS  4,SP
  001e 0a           [7]     RTC   
Task-3 
#include <hidef.h>      /* common defines and macros */
#include "derivative.h"      /* derivative-specific definitions */


void MSDelay(unsigned int);
void main(void) 
{
  char c =0*80;
  
    int i;

    DDRB = 0xFF;    //PORTB as output since LEDs are connected to it
    DDRJ = 0xFF;    //PTJ as output to control Dragon12+ LEDs
    PTJ=0x0;        //Allow the LEDs to display data on PORTB pins
    for(;;)
     {
      for(i=0;i<9;i++)			
      {
        c=c>>1;
        PORTB = c;
        MSDelay(500);
        
      } 
     }
      //MSDelay(1500);
}

//millisecond delay for XTAL=8MHz, PLL=48MHz
                  //The HCS12 Serial Monitor is used to download and  the program.
      //Serial Monitor uses PLL=48MHz

 void MSDelay(unsigned int itime)
  {
    unsigned int i; unsigned int j;
    for(i=0;i<itime;i++)
      for(j=0;j<4000;j++);    //1 msec. tested using Scope
  }
Assembly
*** EVALUATION ***
ANSI-C/cC++ Compiler for HC12 V-5.0.41 Build 10203, Jul 23 2010

    1:          #include <hidef.h>      /* common defines and macros */
    2:  #include "derivative.h"      /* derivative-specific definitions */
    3:  
    4:  
    5:  void MSDelay(unsigned int);
    6:  void main(void) 
    7:  {
*** EVALUATION ***

Function: main
Source  : C:\Users\ecelab\Desktop\Project_9\Sources\main.c
Options : -CPUHCS12 -D__NO_FLOAT__ -Env"GENPATH=C:\Users\ecelab\Desktop\Project_9;C:\Users\ecelab\Desktop\Project_9\bin;C:\Users\ecelab\Desktop\Project_9\prm;C:\Users\ecelab\Desktop\Project_9\cmd;C:\Users\ecelab\Desktop\Project_9\Sources;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\lib;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\src;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -Env"LIBPATH=C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -EnvOBJPATH=C:\Users\ecelab\Desktop\Project_9\bin -EnvTEXTPATH=C:\Users\ecelab\Desktop\Project_9\bin -Lasm=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o.lst -Mb -ObjN=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o -WmsgSd1106

    8:    char c =0*80;
  0000 69af         [2]     CLR   1,-SP
    9:    
   10:      int i;
   11:  
   12:      DDRB = 0xFF;    //PORTB as output since LEDs are connected to it
  0002 c6ff         [1]     LDAB  #255
  0004 5b00         [2]     STAB  _DDRAB:1
   13:      DDRJ = 0xFF;    //PTJ as output to control Dragon12+ LEDs
  0006 7b0000       [3]     STAB  _DDRJ
   14:      PTJ=0x0;        //Allow the LEDs to display data on PORTB pins
  0009 790000       [3]     CLR   _PTJ
   15:      for(;;)
   16:       {
   17:        for(i=0;i<9;i++)			
  000c ce0000       [2]     LDX   #0
   18:        {
   19:          c=c>>1;
  000f 6780         [3]     ASR   0,SP
   20:          PORTB = c;
  0011 e680         [3]     LDAB  0,SP
  0013 5b00         [2]     STAB  _PORTAB:1
   21:          MSDelay(500);
  0015 cc01f4       [2]     LDD   #500
  0018 34           [2]     PSHX  
  0019 4a000000     [7]     CALL  MSDelay,PAGE(MSDelay)
  001d 30           [3]     PULX  
  001e 08           [1]     INX   
  001f 8e0009       [2]     CPX   #9
  0022 2deb         [3/1]   BLT   *-19 ;abs = 000f
  0024 20e6         [3]     BRA   *-24 ;abs = 000c
   22:          
   23:        } 
   24:       }
   25:        //MSDelay(1500);
   26:  }
   27:  
   28:  //millisecond delay for XTAL=8MHz, PLL=48MHz
   29:                    //The HCS12 Serial Monitor is used to download and  the program.
   30:        //Serial Monitor uses PLL=48MHz
   31:  
   32:   void MSDelay(unsigned int itime)
   33:    {
*** EVALUATION ***

Function: MSDelay
Source  : C:\Users\ecelab\Desktop\Project_9\Sources\main.c
Options : -CPUHCS12 -D__NO_FLOAT__ -Env"GENPATH=C:\Users\ecelab\Desktop\Project_9;C:\Users\ecelab\Desktop\Project_9\bin;C:\Users\ecelab\Desktop\Project_9\prm;C:\Users\ecelab\Desktop\Project_9\cmd;C:\Users\ecelab\Desktop\Project_9\Sources;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\lib;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\src;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -Env"LIBPATH=C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -EnvOBJPATH=C:\Users\ecelab\Desktop\Project_9\bin -EnvTEXTPATH=C:\Users\ecelab\Desktop\Project_9\bin -Lasm=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o.lst -Mb -ObjN=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o -WmsgSd1106

  0000 6cac         [2]     STD   4,-SP
   34:      unsigned int i; unsigned int j;
   35:      for(i=0;i<itime;i++)
  0002 c7           [1]     CLRB  
  0003 87           [1]     CLRA  
  0004 6c82         [2]     STD   2,SP
  0006 200e         [3]     BRA   *+16 ;abs = 0016
   36:        for(j=0;j<4000;j++);    //1 msec. tested using Scope
  0008 ce0000       [2]     LDX   #0
  000b 08           [1]     INX   
  000c 8e0fa0       [2]     CPX   #4000
  000f 25fa         [3/1]   BCS   *-4 ;abs = 000b
  0011 ee82         [3]     LDX   2,SP
  0013 08           [1]     INX   
  0014 6e82         [2]     STX   2,SP
  0016 ec82         [3]     LDD   2,SP
  0018 ac80         [3]     CPD   0,SP
  001a 25ec         [3/1]   BCS   *-18 ;abs = 0008
   37:    }
  001c 1b84         [2]     LEAS  4,SP
  001e 0a           [7]     RTC   
   38:  
Task-4
#include <hidef.h>      /* common defines and macros */
#include "derivative.h"      /* derivative-specific definitions */


void MSDelay(unsigned int);
void main(void) 
{
  char x;
  char y;
  char output;
  x=1;
  y=2;
  output=x&y;
    

    DDRB = 0xFF;    //PORTB as output since LEDs are connected to it
    DDRJ = 0xFF;    //PTJ as output to control Dragon12+ LEDs
    PTJ=0x0;        //Allow the LEDs to display data on PORTB pins
    for(;;) 
    			
      {
        PORTB = x;
        MSDelay(7000);    //1/2 sec delay
        PORTB = y;
        MSDelay(7000);
        PORTB = output;
        MSDelay (7000);
      }
        
}

//millisecond delay for XTAL=8MHz, PLL=48MHz
//The HCS12 Serial Monitor is used to download and  the program.
//Serial Monitor uses PLL=48MHz

 void MSDelay(unsigned int itime)
  {
    unsigned int i; unsigned int j;
    for(i=0;i<itime;i++)
      for(j=0;j<4000;j++);    //1 msec. tested using Scope
  }


*** EVALUATION ***
ANSI-C/cC++ Compiler for HC12 V-5.0.41 Build 10203, Jul 23 2010

    1:  #include <hidef.h>      /* common defines and macros */
    2:  #include "derivative.h"      /* derivative-specific definitions */
    3:  
    4:  
    5:  void MSDelay(unsigned int);
    6:  void main(void) 
    7:  {
*** EVALUATION ***

Function: main
Source  : C:\Users\ecelab\Desktop\Project_9\Sources\main.c
Options : -CPUHCS12 -D__NO_FLOAT__ -Env"GENPATH=C:\Users\ecelab\Desktop\Project_9;C:\Users\ecelab\Desktop\Project_9\bin;C:\Users\ecelab\Desktop\Project_9\prm;C:\Users\ecelab\Desktop\Project_9\cmd;C:\Users\ecelab\Desktop\Project_9\Sources;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\lib;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\src;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -Env"LIBPATH=C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -EnvOBJPATH=C:\Users\ecelab\Desktop\Project_9\bin -EnvTEXTPATH=C:\Users\ecelab\Desktop\Project_9\bin -Lasm=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o.lst -Mb -ObjN=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o -WmsgSd1106

  0000 1b9d         [2]     LEAS  -3,SP
    8:    char x;
    9:    char y;
   10:    char output;
   11:    x=1;
  0002 ccff01       [2]     LDD   #65281
  0005 6b82         [2]     STAB  2,SP
   12:    y=2;
  0007 58           [1]     LSLB  
  0008 6b81         [2]     STAB  1,SP
   13:    output=x&y;
  000a 6980         [2]     CLR   0,SP
   14:      
   15:  
   16:      DDRB = 0xFF;    //PORTB as output since LEDs are connected to it
  000c 5a00         [2]     STAA  _DDRAB:1
   17:      DDRJ = 0xFF;    //PTJ as output to control Dragon12+ LEDs
  000e 7a0000       [3]     STAA  _DDRJ
   18:      PTJ=0x0;        //Allow the LEDs to display data on PORTB pins
  0011 790000       [3]     CLR   _PTJ
   19:                     for(;;) 
   20:      			
   21:        {
   22:          PORTB = x;
  0014 e682         [3]     LDAB  2,SP
  0016 5b00         [2]     STAB  _PORTAB:1
   23:          MSDelay(7000);    //1/2 sec delay
  0018 cc1b58       [2]     LDD   #7000
  001b 4a000000     [7]     CALL  MSDelay,PAGE(MSDelay)
   24:          PORTB = y;
  001f e681         [3]     LDAB  1,SP
  0021 0706         [4]     BSR   *+8 ;abs = 0029
   25:          MSDelay(7000);
   26:          PORTB = output;
  0023 e680         [3]     LDAB  0,SP
  0025 0702         [4]     BSR   *+4 ;abs = 0029
  0027 20eb         [3]     BRA   *-19 ;abs = 0014
  0029 5b00         [2]     STAB  _PORTAB:1
  002b cc1b58       [2]     LDD   #7000
  002e 4a000000     [7]     CALL  MSDelay,PAGE(MSDelay)
  0032 3d           [5]     RTS   
   27:          MSDelay (7000);
   28:        }
   29:          
   30:  }
   31:  
   32:  //millisecond delay for XTAL=8MHz, PLL=48MHz
   33:  //The HCS12 Serial Monitor is used to download and  the program.
   34:  //Serial Monitor uses PLL=48MHz
   35:  
   36:   void MSDelay(unsigned int itime)
   37:    {
*** EVALUATION ***

Function: MSDelay
Source  : C:\Users\ecelab\Desktop\Project_9\Sources\main.c
Options : -CPUHCS12 -D__NO_FLOAT__ -Env"GENPATH=C:\Users\ecelab\Desktop\Project_9;C:\Users\ecelab\Desktop\Project_9\bin;C:\Users\ecelab\Desktop\Project_9\prm;C:\Users\ecelab\Desktop\Project_9\cmd;C:\Users\ecelab\Desktop\Project_9\Sources;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\lib;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\src;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -Env"LIBPATH=C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -EnvOBJPATH=C:\Users\ecelab\Desktop\Project_9\bin -EnvTEXTPATH=C:\Users\ecelab\Desktop\Project_9\bin -Lasm=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o.lst -Mb -ObjN=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o -WmsgSd1106

  0000 6cac         [2]     STD   4,-SP
   38:      unsigned int i; unsigned int j;
   39:      for(i=0;i<itime;i++)
  0002 c7           [1]     CLRB  
  0003 87           [1]     CLRA  
  0004 6c82         [2]     STD   2,SP
  0006 200e         [3]     BRA   *+16 ;abs = 0016
   40:        for(j=0;j<4000;j++);    //1 msec. tested using Scope
  0008 ce0000       [2]     LDX   #0
  000b 08           [1]     INX   
  000c 8e0fa0       [2]     CPX   #4000
  000f 25fa         [3/1]   BCS   *-4 ;abs = 000b
  0011 ee82         [3]     LDX   2,SP
  0013 08           [1]     INX   
  0014 6e82         [2]     STX   2,SP
  0016 ec82         [3]     LDD   2,SP
  0018 ac80         [3]     CPD   0,SP
  001a 25ec         [3/1]   BCS   *-18 ;abs = 0008
   41:    }
  001c 1b84         [2]     LEAS  4,SP
  001e 0a           [7]     RTC   
   42:  
   43:  



#include <hidef.h>      /* common defines and macros */
#include "derivative.h"      /* derivative-specific definitions */


void MSDelay(unsigned int);
void main(void) 
{
  char x;
  char y;
  char output;
  x=1;
  y=2;
  output=x|y;
    

    DDRB = 0xFF;    //PORTB as output since LEDs are connected to it
    DDRJ = 0xFF;    //PTJ as output to control Dragon12+ LEDs
    PTJ=0x0;        //Allow the LEDs to display data on PORTB pins
                   for(;;) 
    			
      {
        PORTB = x;
        MSDelay(7000);    //1/2 sec delay
        PORTB = y;
        MSDelay(7000);
        PORTB = output;
        MSDelay (7000);
      }
        
}

//millisecond delay for XTAL=8MHz, PLL=48MHz
//The HCS12 Serial Monitor is used to download and  the program.
//Serial Monitor uses PLL=48MHz

 void MSDelay(unsigned int itime)
  {
    unsigned int i; unsigned int j;
    for(i=0;i<itime;i++)
      for(j=0;j<4000;j++);    //1 msec. tested using Scope
  }
*** EVALUATION ***
ANSI-C/cC++ Compiler for HC12 V-5.0.41 Build 10203, Jul 23 2010

    1:           #include <hidef.h>      /* common defines and macros */
    2:  #include "derivative.h"      /* derivative-specific definitions */
    3:  
    4:  
    5:  void MSDelay(unsigned int);
    6:  void main(void) 
    7:  {
*** EVALUATION ***

Function: main
Source  : C:\Users\ecelab\Desktop\Project_9\Sources\main.c
Options : -CPUHCS12 -D__NO_FLOAT__ -Env"GENPATH=C:\Users\ecelab\Desktop\Project_9;C:\Users\ecelab\Desktop\Project_9\bin;C:\Users\ecelab\Desktop\Project_9\prm;C:\Users\ecelab\Desktop\Project_9\cmd;C:\Users\ecelab\Desktop\Project_9\Sources;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\lib;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\src;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -Env"LIBPATH=C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -EnvOBJPATH=C:\Users\ecelab\Desktop\Project_9\bin -EnvTEXTPATH=C:\Users\ecelab\Desktop\Project_9\bin -Lasm=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o.lst -Mb -ObjN=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o -WmsgSd1106

  0000 1b9d         [2]     LEAS  -3,SP
    8:    char x;
    9:    char y;
   10:    char output;
   11:    x=1;
  0002 ccff01       [2]     LDD   #65281
  0005 6b82         [2]     STAB  2,SP
   12:    y=2;
  0007 58           [1]     LSLB  
  0008 6b81         [2]     STAB  1,SP
   13:    output=x|y;
  000a 52           [1]     INCB  
  000b 6b80         [2]     STAB  0,SP
   14:      
   15:  
   16:      DDRB = 0xFF;    //PORTB as output since LEDs are connected to it
  000d 5a00         [2]     STAA  _DDRAB:1
   17:      DDRJ = 0xFF;    //PTJ as output to control Dragon12+ LEDs
  000f 7a0000       [3]     STAA  _DDRJ
   18:      PTJ=0x0;        //Allow the LEDs to display data on PORTB pins
  0012 790000       [3]     CLR   _PTJ
   19:                     for(;;) 
   20:      			
   21:        {
   22:          PORTB = x;
  0015 e682         [3]     LDAB  2,SP
  0017 5b00         [2]     STAB  _PORTAB:1
   23:          MSDelay(7000);    //1/2 sec delay
  0019 cc1b58       [2]     LDD   #7000
  001c 4a000000     [7]     CALL  MSDelay,PAGE(MSDelay)
   24:          PORTB = y;
  0020 e681         [3]     LDAB  1,SP
  0022 0706         [4]     BSR   *+8 ;abs = 002a
   25:          MSDelay(7000);
   26:          PORTB = output;
  0024 e680         [3]     LDAB  0,SP
  0026 0702         [4]     BSR   *+4 ;abs = 002a
  0028 20eb         [3]     BRA   *-19 ;abs = 0015
  002a 5b00         [2]     STAB  _PORTAB:1
  002c cc1b58       [2]     LDD   #7000
  002f 4a000000     [7]     CALL  MSDelay,PAGE(MSDelay)
  0033 3d           [5]     RTS   
   27:          MSDelay (7000);
   28:        }
   29:          
   30:  }
   31:  
   32:  //millisecond delay for XTAL=8MHz, PLL=48MHz
   33:  //The HCS12 Serial Monitor is used to download and  the program.
   34:  //Serial Monitor uses PLL=48MHz
   35:  
   36:   void MSDelay(unsigned int itime)
   37:    {
*** EVALUATION ***

Function: MSDelay
Source  : C:\Users\ecelab\Desktop\Project_9\Sources\main.c
Options : -CPUHCS12 -D__NO_FLOAT__ -Env"GENPATH=C:\Users\ecelab\Desktop\Project_9;C:\Users\ecelab\Desktop\Project_9\bin;C:\Users\ecelab\Desktop\Project_9\prm;C:\Users\ecelab\Desktop\Project_9\cmd;C:\Users\ecelab\Desktop\Project_9\Sources;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\lib;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\src;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -Env"LIBPATH=C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -EnvOBJPATH=C:\Users\ecelab\Desktop\Project_9\bin -EnvTEXTPATH=C:\Users\ecelab\Desktop\Project_9\bin -Lasm=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o.lst -Mb -ObjN=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o -WmsgSd1106

  0000 6cac         [2]     STD   4,-SP
   38:      unsigned int i; unsigned int j;
   39:      for(i=0;i<itime;i++)
  0002 c7           [1]     CLRB  
  0003 87           [1]     CLRA  
  0004 6c82         [2]     STD   2,SP
  0006 200e         [3]     BRA   *+16 ;abs = 0016
   40:        for(j=0;j<4000;j++);    //1 msec. tested using Scope
  0008 ce0000       [2]     LDX   #0
  000b 08           [1]     INX   
  000c 8e0fa0       [2]     CPX   #4000
  000f 25fa         [3/1]   BCS   *-4 ;abs = 000b
  0011 ee82         [3]     LDX   2,SP
  0013 08           [1]     INX   
  0014 6e82         [2]     STX   2,SP
  0016 ec82         [3]     LDD   2,SP
  0018 ac80         [3]     CPD   0,SP
  001a 25ec         [3/1]   BCS   *-18 ;abs = 0008
   41:    }
  001c 1b84         [2]     LEAS  4,SP
  001e 0a           [7]     RTC   
   42:  
   43:  
#include <hidef.h>      /* common defines and macros */
#include "derivative.h"      /* derivative-specific definitions */


void MSDelay(unsigned int);
void main(void) 
{
  char x;
  char y;
  char output;
  x=1;
  y=2;
  output=~y;
    

    DDRB = 0xFF;    //PORTB as output since LEDs are connected to it
    DDRJ = 0xFF;    //PTJ as output to control Dragon12+ LEDs
    PTJ=0x0;        //Allow the LEDs to display data on PORTB pins
                   for(;;) 
    			
      {
        PORTB = x;
        MSDelay(7000);    //1/2 sec delay
        PORTB = output;
        MSDelay(7000);
      }
        
}

//millisecond delay for XTAL=8MHz, PLL=48MHz
//The HCS12 Serial Monitor is used to download and  the program.
//Serial Monitor uses PLL=48MHz

 void MSDelay(unsigned int itime)
  {
    unsigned int i; unsigned int j;
    for(i=0;i<itime;i++)
      for(j=0;j<4000;j++);    //1 msec. tested using Scope
  }
Assembly
*** EVALUATION ***
ANSI-C/cC++ Compiler for HC12 V-5.0.41 Build 10203, Jul 23 2010

    1:  #include <hidef.h>      /* common defines and macros */
    2:  #include "derivative.h"      /* derivative-specific definitions */
    3:  
    4:  
    5:  void MSDelay(unsigned int);
    6:  void main(void) 
    7:  {
*** EVALUATION ***

Function: main
Source  : C:\Users\ecelab\Desktop\Project_9\Sources\main.c
Options : -CPUHCS12 -D__NO_FLOAT__ -Env"GENPATH=C:\Users\ecelab\Desktop\Project_9;C:\Users\ecelab\Desktop\Project_9\bin;C:\Users\ecelab\Desktop\Project_9\prm;C:\Users\ecelab\Desktop\Project_9\cmd;C:\Users\ecelab\Desktop\Project_9\Sources;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\lib;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\src;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -Env"LIBPATH=C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -EnvOBJPATH=C:\Users\ecelab\Desktop\Project_9\bin -EnvTEXTPATH=C:\Users\ecelab\Desktop\Project_9\bin -Lasm=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o.lst -Mb -ObjN=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o -WmsgSd1106

  0000 3b           [2]     PSHD  
    8:    char x;
    9:    char y;
   10:    char output;
   11:    x=1;
  0001 ccfd01       [2]     LDD   #64769
  0004 6b81         [2]     STAB  1,SP
   12:    y=2;
   13:    output=~y;
  0006 6a80         [2]     STAA  0,SP
   14:      
   15:  
   16:      DDRB = 0xFF;    //PORTB as output since LEDs are connected to it
  0008 50           [1]     NEGB  
  0009 5b00         [2]     STAB  _DDRAB:1
   17:      DDRJ = 0xFF;    //PTJ as output to control Dragon12+ LEDs
  000b 7b0000       [3]     STAB  _DDRJ
   18:      PTJ=0x0;        //Allow the LEDs to display data on PORTB pins
  000e 790000       [3]     CLR   _PTJ
   19:                     for(;;) 
   20:      			
   21:        {
   22:          PORTB = x;
  0011 e681         [3]     LDAB  1,SP
  0013 5b00         [2]     STAB  _PORTAB:1
   23:          MSDelay(7000);    //1/2 sec delay
  0015 cc1b58       [2]     LDD   #7000
  0018 4a000000     [7]     CALL  MSDelay,PAGE(MSDelay)
   24:          PORTB = output;
  001c e680         [3]     LDAB  0,SP
  001e 5b00         [2]     STAB  _PORTAB:1
   25:          MSDelay(7000);
  0020 cc1b58       [2]     LDD   #7000
  0023 4a000000     [7]     CALL  MSDelay,PAGE(MSDelay)
  0027 20e8         [3]     BRA   *-22 ;abs = 0011
   26:        }
   27:          
   28:  }
   29:  
   30:  //millisecond delay for XTAL=8MHz, PLL=48MHz
   31:  //The HCS12 Serial Monitor is used to download and  the program.
   32:  //Serial Monitor uses PLL=48MHz
   33:  
   34:   void MSDelay(unsigned int itime)
   35:    {
*** EVALUATION ***

Function: MSDelay
Source  : C:\Users\ecelab\Desktop\Project_9\Sources\main.c
Options : -CPUHCS12 -D__NO_FLOAT__ -Env"GENPATH=C:\Users\ecelab\Desktop\Project_9;C:\Users\ecelab\Desktop\Project_9\bin;C:\Users\ecelab\Desktop\Project_9\prm;C:\Users\ecelab\Desktop\Project_9\cmd;C:\Users\ecelab\Desktop\Project_9\Sources;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\lib;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\src;C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -Env"LIBPATH=C:\Program Files (x86)\Freescale\CWS12v5.1\lib\HC12c\include" -EnvOBJPATH=C:\Users\ecelab\Desktop\Project_9\bin -EnvTEXTPATH=C:\Users\ecelab\Desktop\Project_9\bin -Lasm=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o.lst -Mb -ObjN=C:\Users\ecelab\Desktop\Project_9\Project_9_Data\Standard\ObjectCode\main.c.o -WmsgSd1106

  0000 6cac         [2]     STD   4,-SP
   36:      unsigned int i; unsigned int j;
   37:      for(i=0;i<itime;i++)
  0002 c7           [1]     CLRB  
  0003 87           [1]     CLRA  
  0004 6c82         [2]     STD   2,SP
  0006 200e         [3]     BRA   *+16 ;abs = 0016
   38:        for(j=0;j<4000;j++);    //1 msec. tested using Scope
  0008 ce0000       [2]     LDX   #0
  000b 08           [1]     INX   
  000c 8e0fa0       [2]     CPX   #4000
  000f 25fa         [3/1]   BCS   *-4 ;abs = 000b
  0011 ee82         [3]     LDX   2,SP
  0013 08           [1]     INX   
  0014 6e82         [2]     STX   2,SP
  0016 ec82         [3]     LDD   2,SP
  0018 ac80         [3]     CPD   0,SP
  001a 25ec         [3/1]   BCS   *-18 ;abs = 0008
   39:    }
  001c 1b84         [2]     LEAS  4,SP
  001e 0a           [7]     RTC   
   40:  
   41:  
