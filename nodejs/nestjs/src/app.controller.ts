import {
    Controller,
    Get
} from '@nestjs/common';
  
@Controller('')
export class AppController {
  
  @Get()
  getHelloWorld(): string {
    return `Hello World!`;
  }
}
  