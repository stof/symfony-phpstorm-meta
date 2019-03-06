<?php

namespace PHPSTORM_META {

	registerArgumentsSet('psr_log_levels',
		\Psr\Log\LogLevel::DEBUG,
		\Psr\Log\LogLevel::INFO,
		\Psr\Log\LogLevel::NOTICE,
		\Psr\Log\LogLevel::WARNING,
		\Psr\Log\LogLevel::ERROR,
		\Psr\Log\LogLevel::CRITICAL,
		\Psr\Log\LogLevel::ALERT,
		\Psr\Log\LogLevel::EMERGENCY
	);
	expectedArguments(\Psr\Log\LoggerInterface::log(), 0, argumentsSet('psr_log_levels'));
	expectedArguments(\Psr\Log\AbstractLogger::log(), 0, argumentsSet('psr_log_levels'));
	expectedArguments(\Psr\Log\NullLogger::log(), 0, argumentsSet('psr_log_levels'));
	expectedArguments(\Symfony\Component\Console\Logger\ConsoleLogger::log(), 0, argumentsSet('psr_log_levels'));
	expectedArguments(\Symfony\Component\HttpKernel\Log\Logger::log(), 0, argumentsSet('psr_log_levels'));
	expectedArguments(\Symfony\Component\Debug\BufferingLogger::log(), 0, argumentsSet('psr_log_levels'));
}