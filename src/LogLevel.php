<?hh // strict

namespace HackLogging;

enum LogLevel: int as int {
  DEBUG = 100;
  INFO = 200;
  NOTICE = 250;
  WARNING = 300;
  ERROR = 400;
  CRITICAL = 500;
  ALERT = 550;
  EMERGENCY = 600;
}
